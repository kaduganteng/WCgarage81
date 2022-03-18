<?php

namespace App\Http\Controllers;

use App\countbdg;
use App\countcmh;
use App\counter;
use App\countkopi;
use App\Kopiportal;
use Illuminate\Http\Request;
use App\Menucaffebdg;
use App\Menucaffecmh;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

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

        $counters = counter::get();
        $counterbdg = countbdg::get();
        $countercmh = countcmh::get();
        $counterkopi = countkopi::get();
        return view('admin.dashboard.dashboard', [
            'stok' =>  $stok,
            'stok2' => $stok2,
            'stok3' => $stok3,
            'counters' => $counters,
            'counterbdg' => $counterbdg,
            'countercmh' => $countercmh,
            'counterkopi' => $counterkopi

        ]);
    }
    public function destroy($id)
    {
        $destroy = counter::destroy($id);
        Alert::warning('Data di Reset!', 'Data di ubah kembali menjadi 0');
        return redirect()->back();
    }
}
