<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetaniController;
use App\Models\Petani;
use Illuminate\Support\Facades\Route;

// Home Route
Route::view('/', 'home');

// Admin Dashboard
Route::get('/admin', [AdminController::class, 'index']);

// Petani Dahsboard
Route::get('/petani', function () {
    return view('petani.dashboard');
});

// Petani show Profile
Route::get('/petani/profile/{id}', [PetaniController::class,'show']);

// Petani project
Route::get('/petani/project', function () {
    return view('petani.project');
});

// Petani portfolio
Route::get('/petani/portfolio', function () {
    return view('petani.portfolio');
});