<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Katagorikopi extends Model
{
    protected $table = "kategorimenukopi";
    protected $fillable = [

        'nama_kategori'
    ];
}
