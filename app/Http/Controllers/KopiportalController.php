<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KopiportalController extends Controller
{
    public function index()
    {
        return view('kopiportal.indexportal');
    }
}
