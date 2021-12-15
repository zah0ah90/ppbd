<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalleriVideo extends Model
{
    protected $table = 'tbl_galleri_video';
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'nama',
        'embed_link',
        'status'
    ];
}