<?php

use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('home');
});

// Petani Dahsboard
Route::get('/petani', function () {
    return view('petani.dashboard');
});

// Petani Profile
Route::get('/petani/profile', function () {
    return view('petani.profile');
});

// Petani project
Route::get('/petani/project', function () {
    return view('petani.project');
});

// Petani portfolio
Route::get('/petani/portfolio', function () {
    return view('petani.portfolio');
});