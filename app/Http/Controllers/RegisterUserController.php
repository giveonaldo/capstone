<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    // Register User
    public function create()
    {
        return view('auth.register', ['title' => 'Register - Page']);
    }

    // Register as Petani
    public function createPetani()
    {
        return view('auth.register-petani', ['title' => 'Register - Petani']);
    }

    // Store users
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

    // Store Petani
    public function storePetani(Request $request)
    {
        $validated = $request->validate([
            'firstName' => ['required'],
            'lastName' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:3']
        ]);

        $user = User::create($validated);

        $user->assignRole('petani');

        Auth::login($user);

        return redirect('/');
    }
}
