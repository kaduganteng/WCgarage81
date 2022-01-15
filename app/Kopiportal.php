<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kopiportal extends Model
{
    protected $table = "kopiportal";
    protected $fillable = [
        'foto_menu',
        'kategori_id',
        'nama',
        'keterangan',
        'harga'
    ];
}
