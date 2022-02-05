<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class counter extends Model
{
    protected $table = "counters";
    protected $fillable = [
        'views'
    ];
}
