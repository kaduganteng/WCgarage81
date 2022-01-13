<?php

namespace App\Http\Controllers;

use App\GaleriKopip;
use App\Katagorikopi;
use App\Kopiportal;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FrenchaiseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ds()
    {
        return view('admin.dashboard.dsfrencaise');
    }

    public function index()
    {
        $kategori = Katagorikopi::all();
        $kopiportal = Kopiportal::get();
        $gkopi = GaleriKopip::get();
        return view('admin.frenchaise.kopiportal.index', [
            'kopiportal' => $kopiportal,
            'gkopi' => $gkopi,
            'kategori' => $kategori
        ]);
    }
    public function create()
    {
        $kategori = Katagorikopi::all();
        return view(
            'admin.frenchaise.kopiportal.form',
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

        $kopiportal = Kopiportal::create([
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
        $destroy = Kopiportal::destroy($id);
        Alert::warning('Data Berhasil Dihapus !', 'Data Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $kp = $request->all();
            $kopiportal = Kopiportal::findOrFail($id)->update([
                'foto_menu' => $request->foto,
                'kategori_id' => $request->kategori_id,
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'harga' => $request->harga


            ]);
            Alert::success('Sukses !', 'Data Berhasil Di Edit');
            return redirect()->route('kopiportal');
        }
    }

    public function creategal()
    {
        return view('admin.frenchaise.kopiportal.formgal');
    }

    public function storegal(Request $request)
    {

        $foto_kopip = $request->file('foto_kopip');
        $nama_file = time() . "_" . $foto_kopip->getClientOriginalExtension();
        $tujuan = 'upload/';
        $foto_kopip->move($tujuan, $nama_file);
        $gkopi = GaleriKopip::create([
            'nama' => $request->nama,
            'foto_kopip' => $nama_file
        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }
    public function destroygal($id)
    {
        $destroy = GaleriKopip::destroy($id);
        Alert::warning('Gambar Berhasil Dihapus !', 'Gambar Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }
}
