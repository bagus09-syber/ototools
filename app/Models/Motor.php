<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $fillable = [
        'merk',
        'model',
        'tahun',
        'bore',
        'stroke',
        'cc',
        'ban_depan',
        'ban_belakang',
    ];
}