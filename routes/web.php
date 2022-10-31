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

Route::view('sample-page', 'admin.pages.sample-page')->name('sample-page');



Route::view('default-layout', 'multiple.default-layout')->name('default-layout');
Route::view('compact-layout', 'multiple.compact-layout')->name('compact-layout');
Route::view('modern-layout', 'multiple.modern-layout')->name('modern-layout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');
