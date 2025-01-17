<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function indexMitra()
    {
        $petanis = User::with(['role', 'products', 'mitra'])->where('role_id', 2)->get();
        return view('admin.kemitraan', compact('petanis'));
    }

    public function indexInvestor()
    {
        $investor = Mitra::with('user')->paginate(10);
        return view('admin.investor', [
            'investors' => $investor
        ]);
    }

    public function indexPetani()
    {
        $petani = User::with(['role', 'products', 'mitra'])
            ->whereHas('role', function($query) {
                $query->where('name', 'petani');
            })->paginate(10);

        return view('admin.petani-all', [
            'petanis' => $petani
        ]);
    }

    public function showPetani($id)
    {
        $petani = User::with(['role', 'products', 'mitra'])
            ->where('id', $id)
            ->whereHas('role', function ($query) {
                $query->where('name', 'petani');
            })
            ->firstOrFail();
        $investor = $petani->mitra()->paginate(10);

        return view('admin.petani', [
            'petani' => $petani,
            'investors' => $investor
        ]);
    }

    public function createMitra()
    {
        return view('admin.create-mitra');
    }

    public function addMitra($petaniId)
    {
        $petani = User::with(['role', 'products', 'mitra'])
            ->where('id', $petaniId)
            ->whereHas('role', function ($query) {
                $query->where('name', 'petani');
            })
            ->firstOrFail();
        $mitra = Mitra::all();
        return view('admin.add-mitra', [
            'petani' => $petani,
            'mitras' => $mitra
        ]);
    }

    public function storeInvestor(Request $request, $petaniId)
    {
        $attributes = $request->validate([
            'mitra_id' => ['required'], ['exists:mitras,id']
        ]);

        $petani = User::findOrFail($petaniId);

        $petani->mitra()->attach($attributes);

        return redirect()->route('admin.petani.show', $petani->id);
    }

    public function storeMitra(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required'],
            'deskripsi' => ['string'],
            'valuasi' => ['required'],
            'status' => ['required'],
            'image' => ['image']
        ]);

        if ($request->hasFile('image')) {
            $attributes['image'] = $request->file('image')->store('mitra_images');
        }

        Mitra::create($attributes);

        return redirect('/admin/investor');
    }

    public function deleteMitra($mitraId)
    {
        $mitra = Mitra::findOrFail($mitraId);

        $mitra->user()->detach();

        $mitra->delete();

        return redirect('/admin/investor');
    }

    public function removeMitra($petaniId, $mitraId)
    {
        $petani = User::findOrFail($petaniId);

        $petani->mitra()->detach($mitraId);

        return redirect()->route('admin.petani.show', $petani->id);
    }
}
