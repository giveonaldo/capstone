<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use App\Models\Petani;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $petani = Petani::simplePaginate(5);
        $investor = Investor::simplePaginate(5);
        return view(
            'admin.dashboard',
            [
                'petanis' => $petani,
                'investors' => $investor
            ]
        );
    }
}
