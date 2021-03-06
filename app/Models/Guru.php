<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guru extends Model
{
    protected $table = 'tbl_guru';
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'wali_kelas',
        'mengajar_sejak',
        'image',
        'status'
    ];
}