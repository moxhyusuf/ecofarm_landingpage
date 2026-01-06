<?php

namespace App\Http\Controllers;

use App\Models\Program;

class DashboardController extends Controller
{
    public function index()
    {
        $program_sidebar = Program::Get();
        return view('admin.dashboard.index', compact('program_sidebar'));
    }
}
