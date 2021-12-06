<?php

use App\Http\Livewire\Admin\User;
use App\Http\Livewire\Front\ForumDiksusi;
use App\Http\Livewire\Front\Home;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('dashboard', function () {
    return view('layouts.admin');
})->middleware('admin');
// admin page
Route::get('user', User::class)->name('user-livewire')->middleware('admin');

require __DIR__ . '/auth.php';

Route::get('/', Home::class);
Route::get('forum-diskusi', ForumDiksusi::class)->name('forum-diskusi-front');
