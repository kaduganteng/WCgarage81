<?php

namespace App\Http\Controllers;

use App\Kopiportal;
use Illuminate\Http\Request;
use App\Menucaffebdg;
use App\Menucaffecmh;

class Cafe81Controller extends Controller
{
    public function index()
    {
        $menubdg = Menucaffebdg::get();
        $menucmh = Menucaffecmh::get();
        $kopiportal = Kopiportal::get();

        return view('cafe81.index', [
            'menubdg' => $menubdg,

        ]);
    }
}
