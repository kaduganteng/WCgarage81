<?php

namespace App\Http\Controllers;

use App\Galericmh;
use App\listcmh;
use App\Listmenucmh;
use App\Menucaffecmh;
use Illuminate\Http\Request;

class CafecmhController extends Controller
{
    public function index()
    {
        $menucmh = Menucaffecmh::get();
        $listcmh = Listmenucmh::get();
        return view(
            'cafecmh.indexcmh',
            [
                'menucmh' => $menucmh, 'listcmh' => $listcmh
            ]
        );
    }
    public function menucmh()
    {
        $menucmh = Menucaffecmh::get();
        return view(
            'cafecmh.menucmh',
            [
                'menucmh' => $menucmh
            ]
        );
    }

    public function galericmh()
    {
        $galericmh = Galericmh::get();
        return view('cafecmh.galericmh', [

            'galericmh' => $galericmh
        ]);
    }
    public function tentangcmh(){
        return view('cafecmh.tentangcmh');
    }
}
