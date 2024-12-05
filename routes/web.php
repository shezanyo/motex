<?php

use App\Http\Controllers\AuthController;

// Show login form
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

// Handle login
Route::post('login', [AuthController::class, 'login']);

// Show registration form
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');

// Handle registration
Route::post('register', [AuthController::class, 'register']);

// Handle logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('dashboard', function () {
    // Only authenticated users can access
})->middleware('auth');
