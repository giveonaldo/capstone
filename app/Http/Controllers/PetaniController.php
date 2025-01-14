<?php

namespace App\Http\Controllers;

use App\Models\Petani;
use App\Models\User;
use Illuminate\Http\Request;

class PetaniController extends Controller
{
    public function index()
    {
        return view('home', [
            'petani' => Petani::get()
        ]);
    }

    // public function show($id)
    // {
    //     $petani = Petani::findOrFail($id); 
    //     return view('petani.profile', ['petani' => $petani]); 
    // }

    public function profile($id)
    {
        $petani = User::findOrFail($id);
        return view('petani.profile', compact('petani'));
    }
}
