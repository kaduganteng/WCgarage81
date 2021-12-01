<?php

namespace App\Http\Controllers;

use App\KategoriMenu;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriMenuController extends Controller
{
    public function index()
    {
        $kategorimenu = KategoriMenu::get();
        return view('admin.kategori.index', [
            'kategori' => $kategorimenu
        ]);
    }

    public function create()
    {
        return view('admin.kategori.form');
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
}
