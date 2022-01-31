<?php

namespace App\Http\Controllers;

use App\Galeribdg;
use App\Galericmh;
use App\Katagoricimahi;
use App\KategoriMenu;
use App\Menucaffebdg;
use App\Menucaffecmh;
use DB;
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
        DB::table('menubdg')->increment('views');
        $kategori = KategoriMenu::all();
        $menubdg = Menucaffebdg::get();
        $gbdg = Galeribdg::get();
        return view('admin.caffe.menubdg.index', [
            'menubdg' => $menubdg,
            'gbdg' => $gbdg,
            'kategori' => $kategori
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
    // public function edit($id)
    // {
    //     $databdg = Menucaffebdg::select('menubdg.*', 'kategori_menu.nama_kategori')->where('menubdg.id', $id)->join('kategori_menu', 'kategori_menu.id', '=', 'menubdg.kategori_id')->first();
    //     $kategori = KategoriMenu::all();
    //     return view('admin.caffe.menubdg.form', [
    //         'databdg' => $databdg,
    //         'kategori' => $kategori
    //     ]);
    // }
    public function edit(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $menubdg = Menucaffebdg::findOrFail($id);
            $awal = $menubdg->foto_menu;
            $tujuan = 'upload/';
            $dt = [
                'foto_menu' => $awal,
                'kategori_id' => $request['kategori_id'],
                'nama' => $request['nama'],
                'keterangan' => $request['keterangan'],
                'harga' => $request['harga']
            ];

            $request->foto_menu->move($tujuan, $awal);
            $menubdg->update($dt);
            Alert::success('Sukses !', 'Data Berhasil Di Edit');
            return redirect()->route('menubdg');
        }
    }


    public function creategal()
    {
        return view('admin.caffe.menubdg.formgal');
    }

    public function storegal(Request $request)
    {

        $foto_bdg = $request->file('foto_bdg');
        $nama_file = time() . "_" . $foto_bdg->getClientOriginalExtension();
        $tujuan = 'upload/';
        $foto_bdg->move($tujuan, $nama_file);
        $gbdg = Galeribdg::create([
            'nama' => $request->nama,
            'foto_bdg' => $nama_file
        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }
    public function destroygal($id)
    {
        $destroy = Galeribdg::destroy($id);
        Alert::warning('Gambar Berhasil Dihapus !', 'Gambar Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }
    // caffe cimahi
    public function index2()
    {
        $kategori = Katagoricimahi::all();
        $menucmh = Menucaffecmh::get();
        $gcmh = Galericmh::get();
        return view(
            'admin.caffe.menucmh.index',
            [
                'menucmh' => $menucmh,
                'gcmh' => $gcmh,
                'kategori' => $kategori
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

    public function edit2(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $menucmh = Menucaffecmh::findOrFail($id);
            $awal = $menucmh->foto_menu;
            $tujuan = 'upload/';
            $dt = [
                'foto_menu' => $awal,
                'kategori_id' => $request['kategori_id'],
                'nama' => $request['nama'],
                'keterangan' => $request['keterangan'],
                'harga' => $request['harga']
            ];

            $request->foto_menu->move($tujuan, $awal);
            $menucmh->update($dt);
            Alert::success('Sukses !', 'Data Berhasil Di Edit');
            return redirect()->route('menucmh');
        }
    }


    public function creategal2()
    {
        return view('admin.caffe.menucmh.formgal');
    }

    public function storegal2(Request $request)
    {

        $foto_cmh = $request->file('foto_cmh');
        $nama_file = time() . "_" . $foto_cmh->getClientOriginalExtension();
        $tujuan = 'upload/';
        $foto_cmh->move($tujuan, $nama_file);
        $gcmh = Galericmh::create([
            'nama' => $request->nama,
            'foto_cmh' => $nama_file
        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }
    public function destroygal2($id)
    {
        $destroy = Galericmh::destroy($id);
        Alert::warning('Gambar Berhasil Dihapus !', 'Gambar Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }
}
