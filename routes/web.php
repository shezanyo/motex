<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;

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


// Display all items
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');

// CRUD operations if needed
Route::get('/shop/create', [ShopController::class, 'create'])->name('shop.create');
Route::post('/shop', [ShopController::class, 'store'])->name('shop.store');
Route::get('/shop/edit/{id}', [ShopController::class, 'edit'])->name('shop.edit');
Route::put('/shop/{id}', [ShopController::class, 'update'])->name('shop.update');
Route::delete('/shop/{id}', [ShopController::class, 'destroy'])->name('shop.destroy');
