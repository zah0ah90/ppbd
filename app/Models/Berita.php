<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Berita extends Model
{
    protected $table = 'tbl_berita';
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'nama',
        'tanggal_posting',
        'type',
        'keterangan',
        'status'
    ];
}