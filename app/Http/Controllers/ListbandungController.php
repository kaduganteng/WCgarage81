<?php

namespace App\Http\Controllers;

use App\ListmenuModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class ListbandungController extends Controller
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
        $list = ListmenuModel::create([
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
}
