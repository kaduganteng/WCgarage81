<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaffeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function ds()
    {
        return view('admin.caffe.dscaffe');
    }

    public function index()
    {
        return view('admin.caffe.menubdg.index');
    }

    public function index2()
    {
        return view('admin.caffe.index2');
    }
}
