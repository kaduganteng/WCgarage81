<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menucaffebdg extends Model
{
    protected $table = "Menucaffebdg";
    protected $fillable = [
        'foto',
        'kategori_menu',
        'nama',
        'keterangan',
        'harga'


    ];
}
