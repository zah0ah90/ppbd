<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.page-belum-login.home');
    }

    public function kontak()
    {
        return view('frontend.page-belum-login.kontak');
    }

    public function sejarah()
    {
        return view('frontend.page-belum-login.sejarah');
    }

    public function tenaga_pendidik()
    {
        $table_guru = DB::table('tbl_guru')->where('deleted_at', '=', null)->get();
        return view('frontend.page-belum-login.tenaga-pendidik', ['guru' => $table_guru]);
    }

    public function visi_misi()
    {
        return view('frontend.page-belum-login.visi-misi');
    }
    public function pengumuman()
    {
        return view('frontend.page-belum-login.pengumuman');
    }
    public function gallerivideo()
    {
        return view('frontend.page-belum-login.galleri-foto');
    }
    public function gallerifoto()
    {
        return view('frontend.page-belum-login.galleri-video');
    }
}