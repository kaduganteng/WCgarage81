<?php

namespace App\Http\Controllers;

use App\Katagoricimahi;
use App\Katagorikopi;
use App\KategoriMenu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriMenuController extends Controller
{

    //Kategori Menu Bandung

    public function index()
    {
        $kategorimenu = KategoriMenu::get();
        return view('admin.kategori.kategoribdg.index', [
            'kategori' => $kategorimenu
        ]);
    }

    public function create()
    {
        return view('admin.kategori.kategoribdg.form');
    }

    public function store(Request $request)
    {
        $ktg = KategoriMenu::create([
            'nama_kategori' => $request->kategori,
        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroy = KategoriMenu::destroy($id);
        Alert::warning('Data Berhasil Dihapus !', 'Data Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }

    //Kategori Menu Cimahi
    public function index2()
    {
        $kategoricmh = Katagoricimahi::get();
        return view('admin.kategori.kategoricmh.index', [
            'kategoricmh' => $kategoricmh
        ]);
    }

    public function create2()
    {
        return view('admin.kategori.kategoricmh.form');
    }

    public function store2(Request $request)
    {
        $ktg = Katagoricimahi::create([
            'nama_kategori' => $request->kategori,
        ]);
        Alert::success(
            'Sukses !',
            'Data Berhasil Di Tambahkan'
        );
        return redirect()->back();
    }

    public function destroy2($id)
    {
        $destroy = Katagoricimahi::destroy($id);
        Alert::warning('Data Berhasil Dihapus !', 'Data Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }

    //Kategori Kopi Portal

    public function index3()
    {
        $kategorikopi = Katagorikopi::get();
        return view('admin.kategori.kategorikopi.index', [
            'kategori' => $kategorikopi
        ]);
    }

    public function create3()
    {
        return view('admin.kategori.kategorikopi.form');
    }

    public function store3(Request $request)
    {
        $ktg = Katagorikopi::create([
            'nama_kategori' => $request->kategori,
        ]);
        Alert::success(
            'Sukses !',
            'Data Berhasil Di Tambahkan'
        );
        return redirect()->back();
    }

    public function destroy3($id)
    {
        $destroy = Katagorikopi::destroy($id);
        Alert::warning('Data Berhasil Dihapus !', 'Data Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }
}
