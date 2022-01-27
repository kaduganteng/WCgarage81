<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listmenucmh extends Model
{
    protected $table = "listcmh";
    protected $fillable = [
        'nama',
        'foto_list'
    ];
}
