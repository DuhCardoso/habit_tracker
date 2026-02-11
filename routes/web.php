<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// HOME
Route::get('/', [SiteController::class, 'index'])->name('site.index');


// LOGIN
Route::get('/login', [LoginController::class,'index'])->name('site.login');
Route::post('/login', [LoginController::class,'authenticate'])->name('auth.login');

// REGISTER
Route::get('/cadastro', [RegisterController::class,'index'])->name('site.register');
Route::post('/cadastro', [RegisterController::class,'store'])->name('auth.register');


// AUTH

// Agrupa as rotas que requerem autenticação, garantindo que apenas usuários autenticados possam acessar a dashboard e realizar logout
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('site.dashboard');

    // LOGOUT
    Route::post('/logout', [LoginController::class,'logout'])->name('auth.logout');
});

