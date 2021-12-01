<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GaleriModel extends Model
{
    protected $table = "galeri";
    protected $fillable = [

        'nama',
        'foto_galeri'
    ];

}
