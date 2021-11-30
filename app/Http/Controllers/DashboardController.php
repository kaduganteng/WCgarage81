<?php

namespace App\Http\Controllers;

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
        $stok = Menucaffebdg::select("kategori_menu.nama_kategori", DB::raw("count(menubdg.id) as jml"))

            ->join('kategori_menu', 'menubdg.kategori_id', '=', 'kategori_menu.id')->groupBy('kategori_menu.nama_kategori')->get();

        $stok2 = Menucaffecmh::select("kategori_menu.nama_kategori", DB::raw("count(menucmh.id) as jml"))

            ->join('kategori_menu', 'menucmh.kategori_id', '=', 'kategori_menu.id')->groupBy('kategori_menu.nama_kategori')->get();

        return view('admin.dashboard.dashboard', [
            'stok' => $stok,
            'stok2' => $stok2
        ]);
    }
}
