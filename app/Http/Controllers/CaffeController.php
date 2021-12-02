<?php

namespace App\Http\Controllers;

use App\KategoriMenu;
use App\Menucaffebdg;
use App\Menucaffecmh;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CaffeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        $foto_menu = $request->file('foto_menu');
        $nama_file = time() . "_" . $foto_menu->getClientOriginalName();
        // tujuan upload
        $tujuan = 'upload/';
        $foto_menu->move($tujuan, $nama_file);
        $menubdg = Menucaffebdg::create([
            'foto_menu' => $nama_file,
            'kategori_id' => $request->kategori_id,
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga
        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroy = Menucaffebdg::destroy($id);
        Alert::warning('Data Berhasil Dihapus !', 'Data Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
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
        Alert::success('Sukses !', 'Data Berhasil Di Edit');
        return redirect()->route('menubdg');
    }

    // caffe cimahi
    public function index2()
    {
        $menucmh = Menucaffecmh::get();
        return view(
            'admin.caffe.menucmh.index',
            [
                'menucmh' => $menucmh
            ]
        );
    }

    public function create2()
    {
        $kategori = KategoriMenu::all();
        return view(
            'admin.caffe.menucmh.form',
            [
                'kategori' => $kategori
            ]
        );
    }

    public function store2(Request $request)
    {
        $foto_menu = $request->file('foto_menu');
        $nama_file = time() . "_" . $foto_menu->getClientOriginalName();
        // tujuan upload
        $tujuan = 'upload/';
        $foto_menu->move($tujuan, $nama_file);
        $menucmh = Menucaffecmh::create([
            'foto_menu' => $nama_file,
            'kategori_id' => $request->kategori_id,
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga
        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }

    public function destroy2($id)
    {
        $destroy = Menucaffecmh::destroy($id);
        Alert::warning('Data Berhasil Dihapus !', 'Data Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }

    public function edit2($id)
    {
        $datacmh = Menucaffecmh::select('menucmh.*', 'kategori_menu.nama_kategori')->where('menucmh.id', $id)->join('kategori_menu', 'kategori_menu.id', '=', 'menucmh.kategori_id')->first();
        $kategori = KategoriMenu::all();

        return view('admin.caffe.menucmh.form', [
            'datacmh' => $datacmh,
            'kategori' => $kategori
        ]);
    }

    public function update2(Request $request, $id)
    {
        $menucmh = Menucaffecmh::findOrFail($id)->update([
            'foto' => $request->foto,
            'kategori_id' => $request->kategori_id,
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga

        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Edit');
        return redirect()->route('menucmh');
    }

    public function  tampilkanSession(Request $request)
    {
        if ($request->session()->has('nama')) {
            echo $request->session()->get('nama');
        } else {
            echo 'Tidak ada data dalam session.';
        }
    }
}
