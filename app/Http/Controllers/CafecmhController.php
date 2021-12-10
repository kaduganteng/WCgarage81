<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafecmhController extends Controller
{
    public function index()
    {
        return view('cafecmh.indexcmh');
    }
}
