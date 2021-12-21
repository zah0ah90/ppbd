<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galleri_foto_detail extends Model
{
    protected $table = 'tbl_galleri_foto_detail';
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama',
        'galleri_foto_id',
    ];
}