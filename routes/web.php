<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Models\Role;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

// Register and Login Users
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUserController::class, 'create']);
    Route::post('/register', [RegisterUserController::class, 'store']);
    Route::get('/register/petani', [RegisterUserController::class, 'createPetani']);
    Route::post('/register/petani', [RegisterUserController::class, 'storePetani']);

    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::delete('/logout', [SessionController::class, 'destroy']);

    Route::middleware('can:petani')->group(function () {
        Route::get('/petani/dashboard', [DashboardController::class, 'indexPetani']);

        // Route for product
        Route::get('/petani/products', [ProductController::class, 'index']);
        Route::get('/petani/products/create', [ProductController::class, 'create']);
        Route::post('/petani/products/create', [ProductController::class, 'store']);
        Route::delete('/petani/product/{id}', [ProductController::class, 'destroy']);
    });

    Route::middleware('can:admin')->group(function() {
        Route::get('/admin/dashboard', [DashboardController::class, 'indexAdmin']);
    });
});
