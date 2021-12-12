<?php

use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\ForumApiController;
use App\Http\Controllers\Api\KomentarApiController;
use App\Http\Controllers\Api\LawyerApiController;
use App\Http\Controllers\Api\ProfileApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthApiController::class, 'login']);
Route::post('register', [AuthApiController::class, 'register']);
Route::get('myProfile', [ProfileApiController::class, 'myProfile'])->middleware('auth:sanctum');;
Route::get('kategori', [AuthApiController::class, 'kategori']);

Route::get('my-forum', [ProfileApiController::class, 'myForum'])->middleware('auth:sanctum');
Route::post('profile-update', [ProfileApiController::class, 'update'])->middleware('auth:sanctum');

// forum
Route::get('forum', [ForumApiController::class, 'index']);
Route::get('forum/{id}', [ForumApiController::class, 'show']);
Route::post('forum-create', [ForumApiController::class, 'create'])->middleware('auth:sanctum');
Route::post('forum-cari', [ForumApiController::class, 'searchForum']);
Route::get('forum-like/{id}', [ForumApiController::class, 'likeForum'])->middleware('auth:sanctum');

Route::post('jawaban-create', [ForumApiController::class, 'createJawaban'])->middleware('auth:sanctum');
Route::post('jawaban-edit/{id}', [ForumApiController::class, 'editJawaban'])->middleware('auth:sanctum');
Route::get('jawaban-hapus/{id}', [ForumApiController::class, 'hapusJawaban'])->middleware('auth:sanctum');

Route::post('komentar-create', [KomentarApiController::class, 'create'])->middleware('auth:sanctum');
Route::get('komentar-detail/{id}', [KomentarApiController::class, 'show']);
Route::get('komentar-hapus/{id}', [KomentarApiController::class, 'destroy'])->middleware('auth:sanctum');

//  lawyer
Route::get('lawyer', [LawyerApiController::class, 'index']);
Route::post('lawyer-register', [LawyerApiController::class, 'registerLawyer'])->middleware('auth:sanctum');
Route::get('lawyer-register-cek', [LawyerApiController::class, 'cekStatus'])->middleware('auth:sanctum');
Route::post('lawyer-pengalaman-kerja-create', [LawyerApiController::class, 'createPengalamanKerja'])->middleware('auth:sanctum');
