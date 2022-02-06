<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::where('type', '=', 'berita')->get();
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

        if ($berita->save()) {
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
    public function edit($id)
    {
        // echo 'test' . $id;
        // die();
        $berita = DB::table('tbl_berita')->where('id', '=', $id)->first();

        return view('backend.berita.edit', ['berita' => $berita]);
    }






    // public function edit(Pengumuman $pengumuman)
    // {
    //     return view('backend.pengumuman.edit',compact('pengumuman'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'tanggal_posting' => 'required',
        ]);

        $berita = DB::table('tbl_berita')
            ->where('id', $id)
            ->update([
                'nama' => $request->nama,
                'tanggal_posting' => $request->tanggal_posting,
                'keterangan' => $request->keterangan,
                'status' => $request->status,
            ]);

        if ($berita) {
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
    public function destroy($id)
    {
        // echo 'test' . $id;
        // die();
        // $berita->delete();
        // DB::table('tbl_berita')->where('id', '=', $id)->delete();

        $berita = DB::table('tbl_berita')
            ->where('id', $id)
            ->update([
                'deleted_at' =>  date('Y-m-d H:i:s')
            ]);
        return redirect()->back()->with('success', 'Berhasil Menghapus!');
    }
}