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

    public function profile($id)
    {
        $petani = User::findOrFail($id);
        return view('petani.profile', compact('petani'));
    }

    public function storeProfile(Request $request, $id)
    {
        // Validate
        $attributes = $request->validate([
            'nomor_telpon' => ['required'],
            'luas_lahan' => ['required'],
            'jenis_usaha' => ['required'],
            'label' => ['required'],
            'deskripsi' => ['required'],
            'alamat' => ['required']
        ]);

        // Find user Based on ID
        $user = User::findOrFail($id);

        // Check if user has already profile
        $profile = Petani::where('user_id', $user->id)->first();

        // if update or create one.
        if ($profile) {
            $profile->update([
                'nomor_telpon' => $attributes['nomor_telpon'],
                'luas_lahan' => $attributes['luas_lahan'],
                'jenis_usaha' => $attributes['jenis_usaha'],
                'label' => $attributes['label'],
                'deskripsi' => $attributes['deskripsi'],
                'alamat' => $attributes['alamat']
            ]);
        } else {
            Petani::create([
                'user_id' => $id,
                'nomor_telpon' => $attributes['nomor_telpon'],
                'luas_lahan' => $attributes['luas_lahan'],
                'jenis_usaha' => $attributes['jenis_usaha'],
                'label' => $attributes['label'],
                'deskripsi' => $attributes['deskripsi'],
                'alamat' => $attributes['alamat']
            ]);
        }

        // redirect route
        return redirect('/petani/dashboard');
    }
}
