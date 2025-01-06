<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\RegisterUserController;
use App\Models\Petani;
use Illuminate\Support\Facades\Route;

// Home Route
Route::view('/', 'home');

// Register and Login Users
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);
