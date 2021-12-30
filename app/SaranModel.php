<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaranModel extends Model
{
    protected $table = "saran";
    protected $fillable = [
        'nama',
        'email',
        'saran'
    ];
}
