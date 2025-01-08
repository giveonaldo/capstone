<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexPetani()
    {
        return view('petani.dashboard');
    }

    public function indexAdmin()
    {
        return view('admin.dashboard');
    }
}
