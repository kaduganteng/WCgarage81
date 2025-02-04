<?php

namespace App\Http\Controllers;

use App\Evenkopi;
use App\Event;
use App\Eventcmh;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::get();
        return view('admin.event.bandung', [
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
            'foto_event' => $nama_file,
            'tgl_event' => $request->tgl_event,
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'rinciankegiatan' => $request->rinciankegiatan
        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }
    public function destroy($id)
    {
        $destroy = Event::destroy($id);
        Alert::warning('Data Berhasil Dihapus !', 'Data Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $event = Event::findOrFail($id);
            $awal = $event->foto_event;
            $tujuan = 'upload/';
            $dt = [

                'tgl_event' => $request['tgl_event'],
                'nama' => $request['nama'],
                'lokasi' => $request->lokasi,
                'foto_event' => $awal,
                'rinciankegiatan' => $request['rinciankegiatan']
            ];

            $request->foto_event->move($tujuan, $awal);
            $event->update($dt);
            Alert::success('Sukses !', 'Data Berhasil Di Edit');
            return redirect()->route('event');
        }
    }

    public function indexcmh()
    {
        $eventcmh = Eventcmh::get();
        return view('admin.event.cimahi', [
            'eventcmh' => $eventcmh
        ]);
    }

    public function createcmh()
    {
        return view('admin.event.cimahi');
    }

    public function storecmh(Request $request)
    {

        $foto_event = $request->file('foto_event');
        $nama_file = time() . "_" . $foto_event->getClientOriginalExtension();
        $tujuan = 'upload/';
        $foto_event->move($tujuan, $nama_file);
        $eventcmh = Eventcmh::create([
            'foto_event' => $nama_file,
            'tgl_event' => $request->tgl_event,
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'rinciankegiatan' => $request->rinciankegiatan
        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }
    public function destroycmh($id)
    {
        $destroy = Eventcmh::destroy($id);
        Alert::warning('Data Berhasil Dihapus !', 'Data Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }

    public function editcmh(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $eventcmh = Eventcmh::findOrFail($id);
            $awal = $eventcmh->foto_event;
            $tujuan = 'upload/';
            $dt = [

                'tgl_event' => $request['tgl_event'],
                'nama' => $request['nama'],
                'lokasi' => $request->lokasi,
                'foto_event' => $awal,
                'rinciankegiatan' => $request['rinciankegiatan']
            ];

            $request->foto_event->move($tujuan, $awal);
            $eventcmh->update($dt);
            Alert::success('Sukses !', 'Data Berhasil Di Edit');
            return redirect()->route('event');
        }
    }

    public function indexkop()
    {
        $eventkopi = Evenkopi::get();
        return view('admin.event.kopi', [
            'eventkopi' => $eventkopi
        ]);
    }

    public function createkopi()
    {
        return view('admin.event.form');
    }

    public function storekopi(Request $request)
    {

        $foto_event = $request->file('foto_event');
        $nama_file = time() . "_" . $foto_event->getClientOriginalExtension();
        $tujuan = 'upload/';
        $foto_event->move($tujuan, $nama_file);
        $eventkopi = Evenkopi::create([
            'foto_event' => $nama_file,
            'tgl_event' => $request->tgl_event,
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'rinciankegiatan' => $request->rinciankegiatan
        ]);
        Alert::success('Sukses !', 'Data Berhasil Di Tambahkan');
        return redirect()->back();
    }
    public function destroykopi($id)
    {
        $destroy = Evenkopi::destroy($id);
        Alert::warning('Data Berhasil Dihapus !', 'Data Yang Berhasil Di Hapus Tidak Dapat Dikembalikan');
        return redirect()->back();
    }

    public function editkopi(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $eventkopi = Evenkopi::findOrFail($id);
            $awal = $eventkopi->foto_event;
            $tujuan = 'upload/';
            $dt = [

                'tgl_event' => $request['tgl_event'],
                'nama' => $request['nama'],
                'lokasi' => $request->lokasi,
                'foto_event' => $awal,
                'rinciankegiatan' => $request['rinciankegiatan']
            ];

            $request->foto_event->move($tujuan, $awal);
            $eventkopi->update($dt);
            Alert::success('Sukses !', 'Data Berhasil Di Edit');
            return redirect()->route('event');
        }
    }
}
