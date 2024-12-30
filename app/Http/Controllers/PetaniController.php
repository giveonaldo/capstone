<?php

namespace App\Http\Controllers;

use App\Models\Petani;
use Illuminate\Http\Request;

class PetaniController extends Controller
{
    public function index()
    {
        // dd(Petani::all());

        return view('home', [
            'petani' => Petani::get()
        ]);
    }

    public function show($id)
    {
        $petani = Petani::findOrFail($id); 
        return view('petani.profile', ['petani' => $petani]); 
    }
}
