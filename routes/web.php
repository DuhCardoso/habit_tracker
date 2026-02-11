<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\LoginController;

// HOME
Route::get('/', [SiteController::class, 'index']);


// LOGIN
Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'authenticate']);
