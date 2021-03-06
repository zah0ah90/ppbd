<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalleriFoto extends Model
{
    protected $table = 'tbl_galleri_foto';
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama',
    ];
}