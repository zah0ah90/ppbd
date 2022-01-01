<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Wali;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WaliController extends Controller
{
    public function index()
    {
        // $wali = Wali::where('type', '=', 'wali')->get();
        // $user = User::where('person_id', '=', 1);
        // echo '<pre>';
        $wali = DB::select(
            "SELECT tbl_wali.id,username, email, nama_ibu_kandung, nama_ayah_kandung , alamat, agama, nomor_kk, 
            (SELECT nama_lengkap_siswa FROM tbl_peserta WHERE wali_id) as nama_anak 
            FROM tbl_wali
            LEFT JOIN users ON tbl_wali.user_id=users.id
            "
        );

        // var_dump($wali);
        // die();


        return view('backend.wali.index', ['wali' => $wali]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('backend.wali.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $wali = new Wali();
        // $wali->nama = $request->nama;
        // $wali->type = $request->type;
        // $wali->tanggal_posting = $request->tanggal_posting;
        // $wali->keterangan = $request->keterangan;

        // $request->validate([
        //     'nama' => 'required',
        //     'keterangan' => 'required',
        //     'tanggal_posting' => 'required',
        // ]);

        // $wali = Wali::create($request->all());

        // if ($wali->save()) {
        //     return redirect()->route('wali.index')->with('success', 'Berhasil menambahkan data wali');
        // } else {
        //     return redirect()->back()->with('error', 'Gagal menambahkan data wali');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function show(Wali $wali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function edit(Wali $wali)
    {

        return view('backend.wali.edit', compact('wali'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wali $wali)
    {
        $request->validate([
            'nama_ayah_kandung' => 'required',
            'nama_ibu_kandung' => 'required',
            'nomor_kk' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'nomor_handphone_ayah' => 'required',
            'nomor_handphone_ibu' => 'required',
            'pendidikan_akhir_ayah' => 'required',
            'pendidikan_akhir_ibu' => 'required',
            'pekerjaan_ayah' => 'required',
            'hubungan_terhadap_anak' => 'required',
        ]);

        // $wali = Wali::find($id);
        // $wali->nis = $request->nis;
        // $wali->nama = $request->nama;

        $wali->update($request->all());

        if ($wali) {
            return redirect()->route('wali.index')->with('success', 'Berhasil memperbarui data wali');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data wali');
        }

        // $product->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wali  $wali
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wali $wali)
    {
        $wali->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus!');
        // return redirect()->route('products.index')->with('success','Product deleted successfully');
    }
}