<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\PengumumanController;
use App\Http\Controllers\backend\BeritaController;
use App\Http\Controllers\backend\GalleriVideoController;
use App\Http\Controllers\backend\GuruController;
Auth::routes();
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

Route::get('/', function () {
    // return view('welcome');
    return view('backend.dashboard.index');
})->name('dashboard');

Route::resource('pengumuman', PengumumanController::class);
Route::resource('berita', BeritaController::class);
Route::resource('galleri_video', GalleriVideoController::class);
Route::resource('guru', GuruController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');