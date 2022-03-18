<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class countbdg extends Model
{
    protected $table = "counterbdg";
    protected $fillable = [
        'views'
    ];
}
