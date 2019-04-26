<?php

namespace Laravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function pasien()
    {
        // get the data from table
        $pasien = DB::table('pasien')->get();

        // and send the data
        return view('pasien', ['pasien' => $pasien]);
    }

    public function tambahPasien()
    {
        return view('tambah-pasien');
    }
}
