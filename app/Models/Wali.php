<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wali extends Model
{
    protected $table = 'tbl_wali';
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_ibu_kandung',
        'nama_ayah_kandung',
        'nomor_kk',
        'alamat',
        'agama',
        'nomor_handphone_ibu',
        'nomor_handphone_ayah',
        'pendidikan_akhir_ayah',
        'pendidikan_akhir_ibu',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
        'hubungan_terhadap_anak'

    ];
}