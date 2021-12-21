<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\PengumumanController;
use App\Http\Controllers\backend\BeritaController;
use App\Http\Controllers\backend\GalleriVideoController;
use App\Http\Controllers\backend\GalleriFotoController;
use App\Http\Controllers\backend\GuruController;

// Auth::routes();

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::get('/', function () {
    // return view('welcome');
    return view('backend.dashboard.index');
})->name('dashboard');

Route::resource('pengumuman', PengumumanController::class);
Route::resource('berita', BeritaController::class);
Route::resource('galleri_video', GalleriVideoController::class);
Route::resource('galleri_foto', GalleriFotoController::class);
Route::resource('guru', GuruController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');