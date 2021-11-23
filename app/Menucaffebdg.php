<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menucaffebdg extends Model
{
    protected $table = "menubdg";
    protected $fillable = [
        'kategori_id',
        'nama',
        'keterangan',
        'harga'


    ];
}
