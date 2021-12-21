<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\NotifUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NotifikasiUserController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        $rules  = [
            'to_user_id' => 'required|integer',
            'title' => 'required|string',
            'deskripsi' => 'required|string',
            'link' => 'required|string',
        ];

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()], 400);
        }

        $notif = NotifUser::create($data);

        return response()->json(['data' => $notif], 201);
    }
    public function listNotif()
    {
        $user = User::with('notif')->find(Auth::user()->id);

        return response()->json(['data' => $user], 200);
    }
}
