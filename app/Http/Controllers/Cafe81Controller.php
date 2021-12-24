<?php

namespace App\Http\Controllers;


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
}
