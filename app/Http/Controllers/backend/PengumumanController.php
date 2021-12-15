<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;


class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::where('type', '=','pengumuman')->get();
        // $user = User::where('person_id', '=', 1);
        
        return view('backend.pengumuman.index', ['pengumuman' => $pengumuman]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pengumuman.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $pengumuman = new Pengumuman();
        // $pengumuman->nama = $request->nama;
        // $pengumuman->type = $request->type;
        // $pengumuman->tanggal_posting = $request->tanggal_posting;
        // $pengumuman->keterangan = $request->keterangan;
        
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'tanggal_posting' => 'required',
        ]);

        $pengumuman = Pengumuman::create($request->all());

        if($pengumuman->save()) {
            return redirect()->route('pengumuman.index')->with('success', 'Berhasil menambahkan data pengumuman');
        } else {
            return redirect()->back()->with('error', 'Gagal menambahkan data pengumuman');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('backend.pengumuman.edit',compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'tanggal_posting' => 'required',
        ]);

        // $pengumuman = Pengumuman::find($id);
        // $pengumuman->nis = $request->nis;
        // $pengumuman->nama = $request->nama;

        $pengumuman->update($request->all());

        if($pengumuman) {
            return redirect()->route('pengumuman.index')->with('success', 'Berhasil memperbarui data pengumuman');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data pengumuman');
        }

        // $product->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        $pengumuman->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus!');
        // return redirect()->route('products.index')->with('success','Product deleted successfully');
    }
}