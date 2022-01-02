<?php

namespace App\Http\Controllers\backendwali;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardWaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.page-sesudah-login.home');
    }

    public function alur_pendaftaran()
    {
        return view('frontend.page-sesudah-login.alur-pendaftaran');
    }

    public function pengumuman_wali()
    {
        return view('frontend.page-sesudah-login.pengumuman');
    }

    public function persyaratan_wali()
    {
        return view('frontend.page-sesudah-login.persyaratan');
    }



    public function profile_peserta()
    {
        return view('frontend.page-sesudah-login.show-profile');
    }
}