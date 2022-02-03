<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SaranModel;
use RealRashid\SweetAlert\Facades\Alert;

class SaranController extends Controller
{
    public function index()
    {
        $saran = SaranModel::get();

        return view('admin.saran.index', [

            'saran' => $saran
        ]);
    }
    public function destroy($id)
    {
        $destroy = SaranModel::destroy($id);
        Alert::warning('Data Berhasil Dihapus !', 'Data Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }
}
