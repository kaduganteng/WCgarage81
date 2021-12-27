<?php

namespace App\Http\Controllers;

use App\Kopiportal;
use Illuminate\Http\Request;

class KopiportalController extends Controller
{
    public function index()
    {
        return view('kopiportal.indexportal');
    }
    public function menukopor()
    {
        $menuportal = Kopiportal::get();
        return view('kopiportal.menuportal', [
            'menuportal' => $menuportal
        ]);
    }
}
