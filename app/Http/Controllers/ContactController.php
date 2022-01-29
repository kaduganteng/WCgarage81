<?php

namespace App\Http\Controllers;

use App\SaranModel;
use App\Notifications\Notifreplay;
use Illuminate\Http\Request;
use Notification;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function index()
    {
        return view('portal.contact');
    }
    public function store(Request $request)
    {
        $saranform = SaranModel::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'saran' => $request->saran

        ]);
        Notification::route("mail", $saranform->email)->notify(new Notifreplay);
        return redirect()->back();
    }
    public function destroy($id)
    {
        $destroy = SaranModel::destroy($id);
        Alert::warning('Data Berhasil Dihapus !', 'Data Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }
}
