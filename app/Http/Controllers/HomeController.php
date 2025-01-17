<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        
        return view('home', [
            'investors' => $investor,
            'petanis' => $petani,
            'user' => $user
        ]);
    }

    public function show($id)
    {
        $user = Auth::user();

        return view('user.profile', compact('user'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        if ($user->id != $id) {
            abort(403, 'Unauthorization action');
        }

        return view('user.edit-profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->id != $id) {
            abort(403, 'Unauthorization action');
        }

        $validatedData = $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,'],
        ]);

        $user->update($validatedData);

        return redirect()->route('user.profile', $user->id);
    }
}
