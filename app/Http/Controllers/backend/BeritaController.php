<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::where('type', '=','berita')->get();
        // $user = User::where('person_id', '=', 1);
        
        return view('backend.berita.index', ['berita' => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.berita.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'tanggal_posting' => 'required',
        ]);

        $berita = Berita::create($request->all());

        if($berita->save()) {
            return redirect()->route('berita.index')->with('success', 'Berhasil menambahkan data berita');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan data berita');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        return view('backend.berita.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'tanggal_posting' => 'required',
        ]);

        // $pengumuman = Pengumuman::find($id);
        // $pengumuman->nis = $request->nis;
        // $pengumuman->nama = $request->nama;

        $berita->update($request->all());

        if($berita) {
            return redirect()->route('berita.index')->with('success', 'Berhasil memperbarui data berita');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data berita');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        $berita->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus!');
    }
}