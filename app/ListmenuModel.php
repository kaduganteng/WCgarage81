<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListmenuModel extends Model
{
    protected $table = "listmenu";
    protected $fillable = [
        'nama',
        'foto_list'
    ];
}
