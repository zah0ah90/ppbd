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
        $data['berita'] = DB::table('tbl_berita')->where('type',  'berita')->where('deleted_at', null)->where('status', 1)->orderBy('created_at', 'desc')->limit(4)->get();
        $data['pengumuman'] = DB::table('tbl_berita')->where('type',  'pengumuman')->where('deleted_at', null)->where('status', 1)->orderBy('created_at', 'desc')->get();
        $data['status'] = DB::table('tbl_status')->first();
        // print_r($data['status']);
        // die();


        return view('frontend.page-belum-login.home', $data);
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
        $table_guru = DB::table('tbl_guru')->where('status', 1)->where('deleted_at', '=', null)->get();
        return view('frontend.page-belum-login.tenaga-pendidik', ['guru' => $table_guru]);
    }

    public function visi_misi()
    {
        return view('frontend.page-belum-login.visi-misi');
    }
    public function pengumuman()
    {
        $data['pengumuman'] = DB::table('tbl_berita')->where('type',  'pengumuman')->where('deleted_at', null)->where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('frontend.page-belum-login.pengumuman', $data);
    }
    public function gallerivideo()
    {
        $data['video'] = DB::table('tbl_galleri_video')->where('deleted_at', null)->where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('frontend.page-belum-login.galleri-video', $data);
    }
    public function gallerifoto()
    {
        $data['foto'] = DB::table('tbl_galleri_foto')->where('deleted_at', null)->where('status', 1)->orderBy('created_at', 'desc')->get();
        return view('frontend.page-belum-login.galleri-foto', $data);
    }
}