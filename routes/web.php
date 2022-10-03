<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PuskesmasController;
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

@include_once('admin_web.php');

Route::get('/', [PuskesmasController::class, 'index']);
Route::get('/tentang_kami', [PuskesmasController::class, 'tentang_kami']);
Route::get('/sejarah', [PuskesmasController::class, 'sejarah']);
Route::get('/kontak', [PuskesmasController::class, 'kontak']);
Route::get('/galeri', [PuskesmasController::class, 'galeri']);

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('registeraction', [UserController::class, 'register_action']);
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('loginaction', [UserController::class, 'login_action']);
Route::get('logout', [UserController::class, 'logout']);



Route::view('sample-page', 'admin.pages.sample-page')->name('sample-page');



Route::view('default-layout', 'multiple.default-layout')->name('default-layout');
Route::view('compact-layout', 'multiple.compact-layout')->name('compact-layout');
Route::view('modern-layout', 'multiple.modern-layout')->name('modern-layout');

Auth::routes();

Route::prefix('home')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
});

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);
