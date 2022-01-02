<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\PengumumanController;
use App\Http\Controllers\backend\BeritaController;
use App\Http\Controllers\backend\GalleriVideoController;
use App\Http\Controllers\backend\GalleriFotoController;
use App\Http\Controllers\backend\GuruController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\PesertaController;
use App\Http\Controllers\backend\WaliController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\backendwali\DashboardWaliController;

// Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('dashboard-home-frontend');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak-frontend');
Route::get('/pengumumans', [HomeController::class, 'pengumuman'])->name('pengumuman-frontend');
Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('sejarah-frontend');
Route::get('/tenaga_pendidik', [HomeController::class, 'tenaga_pendidik'])->name('tenaga_pendidik-frontend');
Route::get('/gallerifoto', [HomeController::class, 'gallerifoto'])->name('gallerifoto-frontend');
Route::get('/gallerivideo', [HomeController::class, 'gallerivideo'])->name('gallerivideo-frontend');
Route::get('/visi_misi', [HomeController::class, 'visi_misi'])->name('visi_misi-frontend');

Route::get('/dashboard-wali', [DashboardWaliController::class, 'index'])->name('dashboard-wali');
Route::get('/alur_pendaftaran', [DashboardWaliController::class, 'alur_pendaftaran'])->name('alur_pendaftaran');
Route::get('/pengumuman_wali', [DashboardWaliController::class, 'pengumuman_wali'])->name('pengumuman_wali');
Route::get('/persyaratan_wali', [DashboardWaliController::class, 'persyaratan_wali'])->name('persyaratan_wali');
Route::get('/edit_profile_wali', [DashboardWaliController::class, 'edit_profile_wali'])->name('edit_profile_wali');
Route::get('/profile_peserta', [DashboardWaliController::class, 'profile_peserta'])->name('profile_peserta');




Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');


Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// Route::get('/pengumuman', [AuthController::class, 'logout'])->name('logout');



Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        /*
    		Route Khusus untuk role admin
    	*/

        // Route::any('/', function () {
        //     echo 'admin';
        // });
        Route::patch('peserta/{id}', 'PesertaController@update')->name('peserta-update');
        Route::delete('peserta/{id}', 'PesertaController@destroy')->name('peserta-delete');


        Route::resource('peserta', PesertaController::class);
        Route::resource('pengumuman', PengumumanController::class);
        Route::resource('berita', BeritaController::class);
        Route::resource('galleri_video', GalleriVideoController::class);
        Route::resource('galleri_foto', GalleriFotoController::class);
        Route::resource('guru', GuruController::class);
        Route::resource('dashboard', DashboardController::class);

        Route::resource('wali', WaliController::class);
    });
    Route::group(['middleware' => ['cek_login:wali']], function () {

        Route::get('editisidatasiswa', [PesertaController::class, 'edit_isi_data_siswa'])->name('edit-data-siswa');
        /*
    		Route Khusus untuk role editor
    	*/
        // Route::resource('editor', AdminController::class);
        // Route::any('/', function () {
        //     echo 'WALI';
        // });
    });

    Route::group(['middleware' => ['cek_login:super_user']], function () {
        /*
    		Route Khusus untuk role editor
    	*/
        // Route::resource('editor', AdminController::class);
        // Route::any('/', function () {
        //     echo 'editor';
        // });
    });
});