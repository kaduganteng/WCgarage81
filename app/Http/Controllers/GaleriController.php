<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galerimodel;
use RealRashid\SweetAlert\Facades\Alert;
class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galerimodel::get();
        return view('admin.galeri.index',[
            'galeri'=> $galeri
        ]);
    }

    public function create()
    {
        return view('admin.galeri.form');
    }

    public function store(Request $request)
    {

        $foto_galeri = $request->file('foto_galeri');
        $nama_file = time() . "_" . $foto_galeri->getClientOriginalExtension();
        $tujuan = 'upload/';
        $foto_galeri->move($tujuan, $nama_file);
        $galeri = Galerimodel::create([
            'nama' => $request->nama,
            'foto_galeri' => $nama_file
        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }
}
