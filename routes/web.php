<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FriendController;

// In routes/web.php
use App\Http\Controllers\DashController;

// Public Routes
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);
});

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');

    // Admin Routes
    // You have two admin route groups:

    // First group

    // Second group (conflicting)
    Route::middleware(['auth',"admin"])->group(function () {
        Route::resource('clients', ClientController::class)->except(['show', 'index',"edit","create"]);
        Route::get("admins", [AdminController::class,'index'])->name("admins.index"); // This conflicts with the first group
    });

    // Profile Management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Client Management

    Route::middleware(['auth'])->group(function () {
        Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
        Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');
        Route::resource('friends', FriendController::class);
    });

    // Logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

// Additional Authentication Routes
require __DIR__.'/auth.php';
