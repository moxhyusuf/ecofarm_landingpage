<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.beranda');
    }

    public function program()
    {
        return view('landing.program');
    }

    public function programDetail($slug)
    {
        // $program = Program::where('slug', $slug)->firstOrFail();
        return view('landing.program-detail');
    }

    public function wisata()
    {
        return view('landing.wisata');
    }

    public function dukunganKerjasama()
    {
        return view('landing.dukungan-kerjasama');
    }

    public function proposal()
    {
        return view('landing.proposal');
    }

    public function kontak()
    {
        return view('landing.kontak');
    }
}
