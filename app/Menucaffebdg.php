<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menucaffebdg extends Model
{
    protected $table = "menubdg";
    protected $fillable = [
        'foto',
        'kategori_id',
        'nama',
        'keterangan',
        'harga'


    ];
}
