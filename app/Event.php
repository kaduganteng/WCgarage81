<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "event";
    protected $fillable = [
        'tgl_event',
        'nama',
        'foto_event',
        'rinciankegiatan'
    ];
}
