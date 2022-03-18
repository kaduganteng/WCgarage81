<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class countcmh extends Model
{
    protected $table = "countercmhs";
    protected $fillable = [
        'views'
    ];
}
