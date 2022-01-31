<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        DB::table('counters')->increment('views');
        $counterview = DB::table('counters')->limit(1)->get();
        return view('home', [
            'counterview' => $counterview
        ]);
    }
}
