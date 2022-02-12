<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventcmh extends Model
{
    protected $table = "eventcmh";
    protected $fillable = [
        'tgl_event',
        'nama',
        'foto_event',
        'lokasi',
        'rinciankegiatan'
    ];
}
