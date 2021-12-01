<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Galerimodel; 

class GaleriController extends Controller
{
    public function index()
    {  $galeri = Galerimodel::get();
        return view('admin.galeri.index');
    }
}
