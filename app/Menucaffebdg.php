<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menucaffebdg extends Model
{
    protected $table = "menubdg";
    protected $fillable = [
        'foto_menu',
        'kategori_id',
        'nama',
        'keterangan',
        'harga'


    ];
}
