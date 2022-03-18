<?php

namespace App\Http\Controllers;

use App\counter;
use App\Evenkopi;
use App\GaleriModel;
use App\Event;
use App\Eventcmh;
use DB;
use Illuminate\Http\Request;

class Landingportalcontroller extends Controller
{
    public function index()
    {
        DB::table('counters')->increment('views');
        $galeri = GaleriModel::get();
        $event = Event::get();
        $eventcmh = Eventcmh::get();
        $eventkopi = Evenkopi::get();
        return view(
            'portal.landingportal',
            [
                'galeri' => $galeri,
                'event' => $event,
                'eventcmh' => $eventcmh,
                'eventkopi' => $eventkopi

            ]
        );
    }
}
