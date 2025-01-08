<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Models\Role;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

// Register and Login Users
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUserController::class, 'create'])->name('login');
    Route::post('/register', [RegisterUserController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::middleware('can:petani')->group(function () {
        Route::get('petani/dashboard', [DashboardController::class, 'indexPetani']);
    });

    Route::middleware('can:admin')->group(function() {
        Route::get('/admin/dashboard', [DashboardController::class, 'indexAdmin']);
    });
});
