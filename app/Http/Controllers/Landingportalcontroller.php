<?php

namespace App\Http\Controllers;

use App\GaleriModel;
use Illuminate\Http\Request;

class Landingportalcontroller extends Controller
{
    public function index()
    {
        $galeri = GaleriModel::get();
        return view(
            'portal.landingportal',
            [
                'galeri' => $galeri
            ]
        );
    }
}
