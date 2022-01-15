<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SaranModel;

class SaranController extends Controller
{
    public function index()
    {
        $saran = SaranModel::get();

        return view('admin.saran.index', [

            'saran' => $saran
        ]);
    }
}
