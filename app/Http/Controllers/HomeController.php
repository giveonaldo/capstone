<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $investor = Mitra::with('user')->paginate(3);
        $petani = User::with(['role', 'products', 'mitra'])
            ->whereHas('role', function ($query) {
                $query->where('name', 'petani');
            })
            ->paginate(3);
        
        return view('home', [
            'investors' => $investor,
            'petanis' => $petani
        ]);
    }

    
}
