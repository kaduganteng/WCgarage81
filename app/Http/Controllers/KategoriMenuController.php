<?php

namespace App\Http\Controllers;

use App\KategoriMenu;
use Illuminate\Http\Request;

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
        return redirect()->back();
    }

    public function destroy($id)
    {
        $destroy = KategoriMenu::destroy($id);
        return redirect()->back();
    }
}
