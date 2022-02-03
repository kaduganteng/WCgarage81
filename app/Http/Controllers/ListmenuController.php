<?php

namespace App\Http\Controllers;

use App\listcmh;
use App\Listmenucmh;
use App\ListmenuModel;
use App\Listmenuportal;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ListmenuController extends Controller
{
    public function index()
    {
        $listmenu = ListmenuModel::get();
        return view('admin.listmenu.bandung', [
            'listmenu' => $listmenu
        ]);
    }

    public function store(Request $request)
    {

        $foto_list = $request->file('foto_list');
        $nama_file = time() . "_" . $foto_list->getClientOriginalExtension();
        $tujuan = 'upload/';
        $foto_list->move($tujuan, $nama_file);
        $listmenu = ListmenuModel::create([
            'nama' => $request->nama,
            'foto_list' => $nama_file
        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $destroy = ListmenuModel::destroy($id);
        Alert::warning('Gambar Berhasil Dihapus !', 'Gambar Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }

    public function index2()
    {
        $listmenu = Listmenucmh::get();
        return view('admin.listmenu.cimahi', [
            'listmenu' => $listmenu
        ]);
    }

    public function store2(Request $request)
    {

        $foto_list = $request->file('foto_list');
        $nama_file = time() . "_" . $foto_list->getClientOriginalExtension();
        $tujuan = 'upload/';
        $foto_list->move($tujuan, $nama_file);
        $listmenu = Listmenucmh::create([
            'nama' => $request->nama,
            'foto_list' => $nama_file
        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }
    public function destroy2($id)
    {
        $destroy = Listmenucmh::destroy($id);
        Alert::warning('Gambar Berhasil Dihapus !', 'Gambar Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }

    public function index3()
    {
        $listmenu = Listmenuportal::get();
        return view('admin.listmenu.portal', [
            'listmenu' => $listmenu
        ]);
    }

    public function store3(Request $request)
    {

        $foto_list = $request->file('foto_list');
        $nama_file = time() . "_" . $foto_list->getClientOriginalExtension();
        $tujuan = 'upload/';
        $foto_list->move($tujuan, $nama_file);
        $listmenu = Listmenuportal::create([
            'nama' => $request->nama,
            'foto_list' => $nama_file
        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }
    public function destroy3($id)
    {
        $destroy = Listmenuportal::destroy($id);
        Alert::warning('Gambar Berhasil Dihapus !', 'Gambar Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }
}
