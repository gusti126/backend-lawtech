<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Jawaban;
use App\Models\Komentar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class KomentarApiController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        $rules = [
            'jawaban_id' => 'required|integer',
            'content' => 'required|string'
        ];
        $validasi = Validator::make($data, $rules);
        if ($validasi->fails()) {
            return response()->json(['message' => $validasi->errors()], 400);
        }

        $jawaban = Jawaban::find($request->jawaban_id);
        if (!$jawaban) {
            return response()->json(['message' => 'jawaban not found'], 404);
        }

        $data['user_id'] = Auth::user()->id;

        $komentar = Komentar::create($data);

        return response()->json([
            'data' => $komentar
        ], 201);
    }

    public function show($id)
    {
        $komentar = Komentar::with('jawaban')->find($id);
        if (!$komentar) {
            return response()->json(['message' => 'komentar not found'], 404);
        }

        return response()->json(['data' => $komentar], 200);
    }

    public function destroy($id)
    {
        $komentar = Komentar::with('jawaban.forum')->find($id);
        if (!$komentar) {
            return response()->json(['message' => 'komentar not found'], 404);
        }
        // dd($komentar);
        // return response()->json($komentar->jawaban->forum->user_id);
        // hapus jika komentar ini milik user yang login atau user yg membuat forum
        if (Auth::user()->id === $id || $komentar->jawaban->forum->user_id === Auth::user()->id) {
            $komentar->delete();
            return response()->json(['message' => 'berhasil hapus komentar'], 200);
        } else {
            return response()->json(['message' => 'anda bukan pemilik forum atau komentar ini bukan milik anda'], 400);
        }
    }
}
