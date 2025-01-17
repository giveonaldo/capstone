<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Models\Role;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

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

    // User Profile
    Route::get('/profile/{id}', [HomeController::class, 'show'])->name('user.profile');
    Route::get('/profile/{id}/edit', [HomeController::class, 'edit']);
    Route::put('/profile/{id}', [HomeController::class, 'update']);

    Route::delete('/logout', [SessionController::class, 'destroy']);

    Route::middleware('can:petani')->group(function () {
        Route::get('/petani/dashboard', [DashboardController::class, 'indexPetani']);

        // Route for product
        Route::get('/petani/products', [ProductController::class, 'index']);
        Route::get('/petani/products/create', [ProductController::class, 'create']);
        Route::post('/petani/products/create', [ProductController::class, 'store']);
        Route::delete('/petani/product/{id}', [ProductController::class, 'destroy']);
        Route::get('/petani/product/update/{id}', [ProductController::class, 'showUpdate']);
        Route::put('/petani/product/{id}', [ProductController::class, 'update']);

        // Route for Mitra
        Route::get('/petani/mitra', [DashboardController::class, 'indexMitra']);

        // Route for profile
        Route::get('/petani/profile/{id}', [PetaniController::class, 'profile']);
        Route::post('/petani/profile/{id}', [PetaniController::class, 'storeProfile']);
    });

    Route::middleware('can:admin')->group(function() {
        Route::get('/admin/dashboard', [AdminController::class, 'index']);
        Route::get('/admin/kemitraan', [AdminController::class, 'indexMitra']);
        Route::get('/admin/investor', [AdminController::class, 'indexInvestor']);
        Route::get('/admin/petani', [AdminController::class, 'indexPetani']);
        Route::get('/admin/kemitraan/create', [AdminController::class, 'createMitra']);
        Route::get('/admin/kemitraan/add/{petaniId}', [AdminController::class, 'addMitra']);
        Route::post('/admin/kemitraan/add/{petaniId}', [AdminController::class, 'storeInvestor']);
        Route::get('/admin/kemitraan/{id}', [AdminController::class, 'showPetani'])->name('admin.petani.show');
        Route::post('/admin/kemitraan/create', [AdminController::class, 'storeMitra']);
        Route::delete('/admin/petani/mitra/{mitraId}', [AdminController::class, 'deleteMitra']);
        Route::delete('/admin/kemitraan/remove/{petaniId}/{mitraId}', [AdminController::class, 'removeMitra']);
    });
});
