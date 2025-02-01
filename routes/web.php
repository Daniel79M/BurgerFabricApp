<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Authentification\AuthController;
use App\Http\Controllers\Livreur\LivreurController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('firstPage');
});


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'index']);
});

// Routes accessibles aux livreurs
Route::middleware(['auth', 'role:livreur'])->group(function () {
    Route::get('/livraison', [LivreurController::class, 'index']);
});

// Routes accessibles uniquement aux administrateurs
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index']);

    Route::middleware(['auth', 'role:user'])->group(function () {
        Route::get('/dashboard', [UserController::class, 'index']);
    });
    
    // Routes accessibles aux livreurs
    Route::middleware(['auth', 'role:livreur'])->group(function () {
        Route::get('/livraison', [LivreurController::class, 'index']);
    });

    Route::get('/menu', [MenuController::class, 'index'])->name('menu');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

});


Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

