<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ForumHukum;
use App\Models\HukumKategori;
use App\Models\Jawaban;
use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ForumApiController extends Controller
{
    public function index()
    {
        $data = ForumHukum::orderBy('id', 'desc')->with('kategori', 'user')->withCount('like', 'jawaban')->get();

        return response()->json(['data' => $data], 200);
    }
    public function show($id)
    {
        $forum = ForumHukum::with('kategori', 'user')->withCount('like', 'jawaban')->find($id);
        if (!$forum) {
            return response()->json(['message' => 'forum not found'], 404);
        }
        $jawaban = Jawaban::where('forum_hukum_id', $forum->id)->with('user', 'komentar')->withCount('komentar')->get();

        $data['forum'] = $forum;
        $data['jawaban'] = $jawaban;

        return response()->json(['data' => $data], 200);
    }

    public function create(Request $request)
    {
        $rules = [
            'hukum_kategori_id' => 'required|integer',
            'content' => 'required|string'
        ];
        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()], 400);
        }

        $data['user_id'] = Auth::user()->id;

        $kategori_id = $request->hukum_kategori_id;
        $katgori = HukumKategori::find($kategori_id);
        if (!$katgori) {
            return response()->json(['message' => 'kategori id not found'], 401);
        }

        $forum = ForumHukum::create($data);

        return response()->json(['data' => $forum], 201);
    }

    public function searchForum(Request $request)
    {
        $data = "Data Kosong";
        $forum = ForumHukum::query()->where('content', 'LIKE', "%$request->keyword%")->with('user')->get();
        if ($forum->count()) {
            $data = $forum;
        }
        $kategori = HukumKategori::query()->where('nama', 'LIKE', "%$request->keyword%")->with('forumMany.user')->get();
        // dd(empty($kategori));
        if ($kategori->count()) {
            $data = $kategori->pluck('forumMany');
        }

        return response()->json(['data' => $data], 200);
    }

    public function likeForum($id)
    {
        $forum = ForumHukum::find($id);
        if (!$forum) {
            return response()->json(['message' => 'forum not found'], 404);
        }

        $data['user_id'] = Auth::user()->id;
        $data['forum_hukum_id'] = $id;

        $like = Like::create($data);
        $forum = ForumHukum::withCount('like')->find($id);

        return response()->json(['data' => $forum], 201);
    }

    public function createJawaban(Request $request)
    {
        $data = $request->all();
        $rules = [
            'content' => 'required|string',
            'forum_hukum_id' => 'required|integer'
        ];
        $validasi = Validator::make($data, $rules);
        if ($validasi->fails()) {
            return response()->json(['message' => $validasi->errors()], 400);
        }

        $forum = ForumHukum::find($request->forum_hukum_id);
        if (!$forum) {
            return response()->json(['message' => 'Forum not found'], 404);
        }

        $data['user_id'] = Auth::user()->id;
        $jawaban = Jawaban::create($data);

        return response()->json(['data' => $jawaban], 201);
    }
    public function editJawaban(Request $request, $id)
    {
        $data = $request->all();

        $jawaban = Jawaban::find($id);
        if (!$jawaban) {
            return response()->json(['message' => 'jawaban not found'], 404);
        }

        if ($jawaban->user_id !== Auth::user()->id) {
            return response()->json(['message' => 'jawaban bukan milik user yang login'], 400);
        }

        if ($request->forum_hukum_id) {
            $forum = ForumHukum::find($request->forum_hukum_id);
            if (!$forum) {
                return response()->json(['message' => 'Forum not found'], 404);
            }
        }

        $data['user_id'] = Auth::user()->id;

        $jawaban->update($data);

        return response()->json(['data' => $jawaban], 200);
    }
    public function hapusJawaban($id)
    {
        $jawaban = Jawaban::find($id);
        if (!$jawaban) {
            return response()->json(['message' => 'jawaban not found'], 404);
        }

        $forum_hukum = ForumHukum::find($jawaban->forum_hukum_id);
        // dd($forum_hukum->user_id, Auth::user()->id, $jawaban->user_id, $jawaban->user_id === Auth::user()->id, $forum_hukum->user_id === Auth::user()->id);
        if ($jawaban->user_id === Auth::user()->id || $forum_hukum->user_id === Auth::user()->id) {
            $jawaban->delete();

            return response()->json(['message' => 'berhasil hapus jawaban'], 200);
        } else {
            return response()->json(['message' => 'User Bukan Pemilik Forum atau jawaban bukan milik yang login'], 400);
        }
    }
}
