<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listmenuportal extends Model
{
    protected $table = "listmenuportal";
    protected $fillable = [
        'nama',
        'foto_list'
    ];
}
