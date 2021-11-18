<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrenchaiseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ds()
    {
        return view('admin.frenchaise.dsfrencaise');
    }

    public function index()
    {
        return view('admin.frenchaise.index');
    }
}
