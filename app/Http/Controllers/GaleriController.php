<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galerimodel;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galerimodel::get();
        return view('admin.galeri.index');
    }

    public function create()
    {
        return view('admin.galeri.form');
    }

    public function store(Request $request)
    {

        $foto_galeri = $request->file('foto_galeri');
        $nama_file = time() . "_" . $foto_galeri->getClientOriginalName();
        $tujuan = 'upload/';
        $foto_galeri->move($tujuan, $nama_file);
        $galeri = Galerimodel::create([
            'nama' => $request->nama,
            'foto_galeri' => $nama_file
        ]);

        return redirect()->back();
    }
}
