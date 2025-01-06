<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register', ['title' => 'Register - Page']);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstName' => ['required'],
            'lastName' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:3']
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect('/');
    }
}
