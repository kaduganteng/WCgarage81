<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menucaffecmh extends Model
{
    protected $table = "menucmh";
    protected $fillable = [
        'foto_menu',
        'kategori_id',
        'nama',
        'keterangan',
        'harga'
    ];
}
