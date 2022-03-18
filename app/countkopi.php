<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class countkopi extends Model
{
    protected $table = "counterkopi";
    protected $fillable = [
        'views'
    ];
}
