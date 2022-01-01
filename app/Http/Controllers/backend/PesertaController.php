<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peserta = DB::select(
            "SELECT a.no_pendaftaran, a.nama_lengkap_siswa, a.nama_panggilan, a.jenis_kelamin, a.agama, a.status,
            a.wali_id, a.id, b.nama_ibu_kandung, b.nama_ayah_kandung
           
            FROM tbl_peserta as a
            LEFT JOIN tbl_wali as b ON a.wali_id=b.id
            "
        );



        // $peserta = Peserta::get();
        // echo '<pre>';
        // var_dump($peserta);
        // die();
        // $user = User::where('person_id', '=', 1);

        return view('backend.peserta.index', ['peserta' => $peserta]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peserta = Peserta::findOrFail($id);
        return view('backend.peserta.edit', ['peserta' =>  $peserta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $peserta)
    {
        echo 'wkwkwk' . $peserta;
        die();
        $request->validate([]);

        // $wali = Wali::find($id);
        // $wali->nis = $request->nis;
        // $wali->nama = $request->nama;

        $peserta->update($request->all());

        if ($peserta) {
            return redirect()->route('peserta.index')->with('success', 'Berhasil memperbarui data peserta');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data peserta');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta)
    {
        // echo 'wkwkwkw';
        // die();
        $peserta->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus!');
    }
}