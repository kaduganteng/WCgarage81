<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Landingportalcontroller extends Controller
{
    public function index()
    {
        return view('portal.landingportal');
    }
}
