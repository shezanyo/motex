<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

// Auth routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Protect dashboard route with 'auth' middleware
Route::get('dashboard', function () {
    // Only authenticated users can access
})->middleware('auth');

// Shop routes
Route::group(['middleware' => ['auth']], function () {
    // Only authenticated users can perform CRUD operations
    Route::get('/shop/create', [ShopController::class, 'create'])->name('shop.create');
    Route::post('/shop', [ShopController::class, 'store'])->name('shop.store');
    Route::get('/shop/edit/{id}', [ShopController::class, 'edit'])->name('shop.edit');
    Route::put('/shop/{id}', [ShopController::class, 'update'])->name('shop.update');
    Route::delete('/shop/{id}', [ShopController::class, 'destroy'])->name('shop.destroy');
});

// Public or less restricted routes
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index'); // No auth required
