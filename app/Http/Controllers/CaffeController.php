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
        $menubdg = Menucaffebdg::get();
        return view('admin.caffe.menubdg.index', [
            'menubdg' => $menubdg
        ]);
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
        $this->validate($request, [
            'foto_menu' => 'required'
        ]);
        $foto_menu = $request->file('foto_menu');
        $nama_file = time() . "_" . $foto_menu->getClientOriginalName();

        //    folder tujuan upload
        $tujuan_upload = 'upload/';
        $foto_menu->move($tujuan_upload, $nama_file);
        $menubdg = Menucaffebdg::create([
            'foto_menu' => $tujuan_upload . $nama_file,
            'kategori_id' => $request->kategori_id,
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroy = Menucaffebdg::destroy($id);
        return redirect()->back();
    }
    public function edit($id)
    {
        $databdg = Menucaffebdg::select('menubdg.*', 'kategori_menu.nama_kategori')->where('menubdg.id', $id)->join('kategori_menu', 'kategori_menu.id', '=', 'menubdg.kategori_id')->first();
        $kategori = KategoriMenu::all();
        return view('admin.caffe.menubdg.form', [
            'databdg' => $databdg,
            'kategori' => $kategori
        ]);
    }
    public function update(Request $request, $id)
    {
        $menubdg = Menucaffebdg::findOrFail($id)->update([
            'foto' => $request->foto,
            'kategori_id' => $request->kategori_id,
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga

        ]);
        return redirect()->route('menubdg');
    }

    // caffe cimahi
    public function index2()
    {
        return view('admin.caffe.index2');
    }
}
