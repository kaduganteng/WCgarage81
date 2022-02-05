<?php

namespace App\Http\Controllers;

use App\Galeribdg;
use App\GaleriModel;
use App\ListmenuModel;
use Illuminate\Http\Request;
use App\Menucaffebdg;


class Cafe81Controller extends Controller
{
    public function index()

    {   
        $menubdg = Menucaffebdg::get();
        $listmenu = ListmenuModel::get();
        return view('cafe81.index', [
            'menubdg' => $menubdg, 'listmenu' => $listmenu
        ]);
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
        public function tentangbdg(){
        return view('cafe81.tentangbdg');
    }
}
