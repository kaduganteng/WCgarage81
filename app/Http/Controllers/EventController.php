<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::get();
        return view('admin.event.index', [
            'event' => $event
        ]);
    }

    public function create()
    {
        return view('admin.event.form');
    }

    public function store(Request $request)
    {

        $foto_event = $request->file('foto_event');
        $nama_file = time() . "_" . $foto_event->getClientOriginalExtension();
        $tujuan = 'upload/';
        $foto_event->move($tujuan, $nama_file);
        $event = Event::create([
            'nama' => $request->nama,
            'foto_event' => $nama_file
        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }
}
