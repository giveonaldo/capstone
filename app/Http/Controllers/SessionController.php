<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:3']
        ]);

        if(!Auth::attempt($validate))
        {
            throw ValidationException::withMessages([
                "email" => "email dan password anda tidak cocok."
            ]);
        }

        $request->session()->regenerate();

        return redirect('/');
    }
}
