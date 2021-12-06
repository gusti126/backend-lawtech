<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileApiController extends Controller
{
    public function myForum()
    {
        $id = Auth::user()->id;

        $user = User::with('forum')->where('id', $id)->get();

        return response()->json([
            'status' => 'success',
            'message' => 'list forum saya',
            'data' => $user
        ]);
    }
    public function update(Request $request)
    {
        $data = $request->all();
        $rules = [
            'name' => 'string',
            'email' => 'string|email|unique:users',
            'image' => 'mimes:jpg,bmp,png,jpeg|max:5000',
            'fokus' => 'string',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()
            ], 400);
        }

        $userId = Auth::user()->id;
        $user = User::find($userId);

        if ($request->file('image')) {
            $image = $request->file('image')->store('assets/user/profile', 'public');
            $data['image'] = $image;
        }

        $user->update($data);

        return response()->json(['data' => $user], 200);
    }
    
}
