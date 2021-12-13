<?php

namespace App\Http\Controllers;

use App\Galericmh;
use App\Menucaffecmh;
use Illuminate\Http\Request;

class CafecmhController extends Controller
{
    public function index()
    {
        $menucmh = Menucaffecmh::get();
        $gmch = Galericmh::get();
        return view('cafecmh.indexcmh', [
            'menucmh' => $menucmh

        ]);
    }

    public function galeri()
    {
        $gcmh = Galericmh::get();
        return view(
            'cafecmh.galeri',
            [
                'gcmh' => $gcmh
            ]
        );
    }
}
