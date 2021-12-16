<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PengalamanKerja;
use App\Models\RegisLawyer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LawyerApiController extends Controller
{
    public function index($limit)
    {
        $data = User::where('role', 'lawyer')->orderBy('id', 'desc')->ge();
        if ($limit) {
            $data = User::orderBy('id', 'desc')->limit($limit)->get();
        }

        return response()->json(['data' => $data]);
    }
    public function detail($id)
    {
        $data = User::where('role', 'lawyer')->find($id);
        if (!$data) {
            return response()->json(['message' => 'data id lawyer not found'], 404);
        }
        return response()->json(['data' => $data]);
    }
    public function registerLawyer(Request $request)
    {
        $data = $request->all();
        // rules
        $rules = [
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'kecamatan' => 'required|string',
            'alamat' => 'required|string',
            'skl_pendidikan_terakhir' => 'required|max:10000|mimes:pdf,doc,docx,jpg,jpeg,png',
            'sk_advokat' => 'required|max:10000|mimes:pdf,doc,docx,jpg,jpeg,png'
        ];

        $validasi = Validator::make($data, $rules);
        if ($validasi->fails()) {
            return response()->json(['message' => $validasi->errors()], 400);
        }

        $cek = RegisLawyer::where('user_id', Auth::user()->id)->first();
        if ($cek) {
            return response()->json(['message' => 'Anda sudah mendaftar sebagai lawyer '], 404);
        }

        $data['user_id'] = Auth::user()->id;

        $file_pendidikan = $request->file('skl_pendidikan_terakhir')->store('/lawyers/register/skl_pendidikan', 'public');
        $data['skl_pendidikan_terakhir'] = $file_pendidikan;

        $file_advokat = $request->file('sk_advokat')->store('/lawyers/register/sk_advokat', 'public');
        $data['sk_advokat'] = $file_advokat;

        $registerLawyer = RegisLawyer::create($data);

        return response()->json(['data' => $registerLawyer], 201);
    }

    public function cekStatus()
    {
        $cek = RegisLawyer::where('user_id', Auth::user()->id)->first();
        if (!$cek) {
            return response()->json(['message' => 'user belum regis lawyer'], 404);
        }


        return response()->json(['data' => $cek->status], 200);
    }

    public function createPengalamanKerja(Request $request)
    {
        $cekstatus = $this->cekStatus();
        if ($cekstatus->original['data'] === 'pending') {
            return response()->json(['message' => 'lawyer belum di verify oleh sistem']);
        }

        $data = $request->all();

        // 'user_id', 'nama_instansi', 'mulai', 'berakhir', 'masih_bekerja'
        $rules = [
            'nama_instansi' => 'required|string',
            'mulai' => 'required|date',
            'masih_bekerja' => 'required|boolean',
        ];
        $validasi = Validator::make($data, $rules);
        if ($validasi->fails()) {
            return response()->json(['message' => $validasi->errors()], 400);
        }



        $data['user_id'] = Auth::user()->id;
        $pengalaman_kerja = PengalamanKerja::create($data);

        return response()->json(['data' => $pengalaman_kerja], 201);
    }
}
