<?php

namespace App\Http\Controllers;

use App\GaleriKopip;
use App\Kopiportal;
use Illuminate\Http\Request;

class KopiportalController extends Controller
{
    public function index()
    {
        $menuportal = Kopiportal::get();
        return view('kopiportal.indexportal', [
            'menuportal' => $menuportal
        ]);
    }
    public function menuportal()
    {
        $menuportal = Kopiportal::get();
        return view('kopiportal.menuportal', [
            'menuportal' => $menuportal
        ]);
    }
    public function galeriportal()
    {
        $galeriportal = GaleriKopip::get();
        return view('kopiportal.galeriportal', [
            'galeriportal' => $galeriportal
        ]);
    }
    public function tentangportal(){
    return view('kopiportal.tentangportal');
    }
}

