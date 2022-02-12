<?php

namespace App\Http\Controllers;

use App\GaleriKopip;
use App\Kopiportal;
use Illuminate\Http\Request;
use DB;

class KopiportalController extends Controller
{
    public function index()
    {
        DB::table('counterkopi')->increment('views');
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
    public function tentangportal()
    {
        return view('kopiportal.tentangportal');
    }
}
