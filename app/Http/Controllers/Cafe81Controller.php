<?php

namespace App\Http\Controllers;

use App\Galeribdg;
use App\GaleriModel;
use App\ListmenuModel;
use Illuminate\Http\Request;
use App\Menucaffebdg;
use DB;

class Cafe81Controller extends Controller
{
    public function index()

    {
        DB::table('counterbdg')->increment('views');
        $menubdg = Menucaffebdg::get();
<<<<<<< HEAD
        
=======
        $listmenu = ListmenuModel::get();
>>>>>>> bf817d88f5ab5e3743efa45202e7aa20aa610f04
        return view('cafe81.index', [
            'menubdg' => $menubdg,
            'listmenu' => $listmenu

        ]);
    }

    public function menubdg()
    {
        $menubdg = Menucaffebdg::get();

        return view('cafe81.menubdg', [
            'menubdg' => $menubdg

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
    public function tentangbdg()
    {
        return view('cafe81.tentangbdg');
    }
}
