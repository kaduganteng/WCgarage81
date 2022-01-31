<?php

namespace App\Http\Controllers;

use App\counter;
use App\GaleriModel;
use App\Event;
use DB;
use Illuminate\Http\Request;

class Landingportalcontroller extends Controller
{
    public function index()
    {

        $galeri = GaleriModel::get();
        $event = Event::get();
        return view(
            'portal.landingportal',
            [
                'galeri' => $galeri,
                'event' => $event,

            ]
        );
    }
}
