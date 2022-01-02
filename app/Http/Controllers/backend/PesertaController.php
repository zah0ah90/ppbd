<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use App\Models\Wali;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // echo 'wkwkwk' . $request->status;
        // die();
        $request->validate([
            'status' => 'required',
        ]);

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


    public function edit_isi_data_siswa()
    {
        $cek_login_wali = Auth::id();
        // $peserta = DB::table('tbl_peserta')->where('user_id', $cek_login_wali)->get();
        // $peserta = Peserta::find($cek_login_wali);
        $peserta   = Peserta::where(['user_id' => $cek_login_wali])->first();
        // echo '<pre>';
        // print_r($peserta);
        // die();
        return response()->json($peserta);
    }


    public function update_isi_data_siswa(Request $request)
    {
        // echo '<pre>';
        // // print_r($request);
        // echo 'yaa udah wkwkkw';
        // die();
        $cek_login_wali = Auth::id();
        $update_tbl_peserta =  DB::table('tbl_peserta')->where('user_id', $cek_login_wali)->update([
            'tanggal_daftar' => $request->tanggal_daftar,
            'nama_lengkap_siswa' => $request->nama_lengkap_siswa,
            'nama_panggilan' => $request->nama_panggilan,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kewarganegaraan' => $request->kewarganegaraan,
            'agama' => $request->agama,
            'anak_ke' => $request->anak_ke,
            'banyak_sdr_kandung' => $request->banyak_sdr_kandung,
            'banyak_sdr_tiri' => $request->banyak_sdr_tiri,
            'banyak_sdr_angkat' => $request->banyak_sdr_angkat,
            'bahasa' => $request->bahasa,
            'berat_badan' => $request->berat_badan,
            'tinggi_badan' => $request->tinggi_badan,
            'golongan_darah' => $request->golongan_darah,
            'bertempat_tinggal_bersama' => $request->bertempat_tinggal_bersama,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        if ($update_tbl_peserta) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }


    public function edit_isi_data_wali()
    {
        $cek_login_wali = Auth::id();

        $wali   = Wali::where(['user_id' => $cek_login_wali])->first();

        return response()->json($wali);
    }


    public function update_isi_data_wali(Request $request)
    {
        $cek_login_wali = Auth::id();
        $update_tbl_peserta =  DB::table('tbl_wali')->where('user_id', $cek_login_wali)->update([
            'nama_ibu_kandung' => $request->nama_ibu_kandung,
            'nama_ayah_kandung' => $request->nama_ayah_kandung,
            'nomor_kk' => $request->nomor_kk,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'nomor_handphone_ibu' => $request->nomor_handphone_ibu,
            'nomor_handphone_ayah' => $request->nomor_handphone_ayah,
            'pendidikan_akhir_ayah' => $request->pendidikan_akhir_ayah,
            'pendidikan_akhir_ibu' => $request->pendidikan_akhir_ibu,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'hubungan_terhadap_anak' => $request->hubungan_terhadap_anak,

        ]);
        if ($update_tbl_peserta) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function pengumuman_peserta_status()
    {
        $cek_login_wali = Auth::id();
        // $cek_tabel_peserta = DB::table('tbl_peserta')->where('user_id', $cek_login_wali)->get();

        $peserta = DB::select(
            "SELECT a.no_pendaftaran, a.nama_lengkap_siswa,  a.jenis_kelamin,  a.status, a.tanggal_daftar, a.tanggal_lahir,
            a.wali_id, a.id, b.nama_ibu_kandung, b.nama_ayah_kandung, a.user_id
           
            FROM tbl_peserta as a
            LEFT JOIN tbl_wali as b ON a.wali_id=b.id
            WHERE a.user_id='$cek_login_wali'
            "
        );

        // echo '<pre>';
        // print_r($peserta);
        // die();

        return view('frontend.page-sesudah-login.pengumuman', ['peserta' => $peserta]);
    }
}