<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function index()
    {
        // $information = Information::first();
        return view('landing.beranda');
    }
}
