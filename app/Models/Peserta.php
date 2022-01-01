<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Peserta extends Model
{
    protected $table = 'tbl_peserta';
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tanggal_daftar',
        'tanggal_lahir',
        'jenis_kelamin',
        'status',
        'nama_lengkap_siswa',
        'nama_panggilan',
        'agama',
        'kewarganegaraan',
        'anak_ke',
        'banyak_sdr_kandung',
        'banyak_sdr_tiri',
        'banyak_sdr_angkat',
        'bahasa',
        'berat_badan',
        'tinggi_badan',
        'golongan_darah',
        'riwayat_penyakit',
        'alamat',
        'bertempat_tinggal_bersama',
        'foto_akta_lahir',
        'foto_kartu_keluarga',
        'foto_surat_pernyataan',

    ];
}