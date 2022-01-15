<?php

namespace App\Http\Controllers;

use App\Kopiportal;
use Illuminate\Http\Request;
use App\Menucaffebdg;
use App\Menucaffecmh;
use DB;

class DashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stok = Menucaffebdg::select(DB::raw("count(menubdg.id) as jml"))->get();


        $stok2 = Menucaffecmh::select(DB::raw("count(menucmh.id) as jml"))->get();


        $stok3 = Kopiportal::select(DB::raw("count(kopiportal.id) as jml"))->get();



        return view('admin.dashboard.dashboard', [
            'stok' =>  $stok,
            'stok2' => $stok2,
            'stok3' => $stok3,

        ]);
    }
}
