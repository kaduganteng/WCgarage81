<?php

namespace App\Http\Controllers;

use App\Galeribdg;
use App\GaleriModel;
use Illuminate\Http\Request;
use App\Menucaffebdg;


class Cafe81Controller extends Controller
{
    public function index()

    {

        return view('cafe81.index');
    }

    public function menubdg()
    {
        $menubdg = Menucaffebdg::get();
        return view('cafe81.menubdg', [
            'menubdg' => $menubdg,

        ]);
    }
    public function galeribdg()
    {
        $galeribdg = Galeribdg::get();
        return view(
            'cafe81.galeribdg',
            [
                'galeribdg' => $galeribdg
            ]
        );
    }
}
