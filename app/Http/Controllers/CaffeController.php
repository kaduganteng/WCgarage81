<?php

namespace App\Http\Controllers;

use App\KategoriMenu;
use App\Menucaffebdg;
use Illuminate\Http\Request;

class CaffeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function ds()
    {
        return view('admin.caffe.dscaffe');
    }
    // caffe bandung

    public function index()
    {
        return view('admin.caffe.menubdg.index');
    }
    public function create()
    {
        $kategori = KategoriMenu::all();
        return view(
            'admin.caffe.menubdg.form',
            [
                'kategori' => $kategori
            ]
        );
    }

    public function store(Request $request)
    {
        $mnu = Menucaffebdg::create([
            'foto' => $request->foto,
            'kategori_menu' => $request->kategorimenu,
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga
        ]);
        return redirect()->back()->with('success', 'Berhasil di Input');
    }




    // caffe cimahi
    public function index2()
    {
        return view('admin.caffe.index2');
    }
}
