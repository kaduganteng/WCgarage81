<?php

namespace App\Http\Controllers;

use App\Kopiportal;
use Illuminate\Http\Request;

class FrenchaiseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ds()
    {
        return view('admin.dashboard.dsfrencaise');
    }

    public function index()
    {
        $kopiportal = Kopiportal::get();
        return view('admin.frenchaise.kopiportal.index', [
            'kopiportal' => $kopiportal
        ]);
    }
    public function create()
    {
        return view('admin.frenchaise.kopiportal.form');
    }

    public function store(Request $request)
    {
        $foto_menu = $request->file('foto_menu');
        $nama_file = time() . "_" . $foto_menu->getClientOriginalName();
        // tujuan upload
        $tujuan = 'upload/';
        $foto_menu->move($tujuan, $nama_file);

        $kopiportal = Kopiportal::create([
            'foto_menu' => $nama_file,
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga

        ]);
        return redirect()->back();
    }
}
