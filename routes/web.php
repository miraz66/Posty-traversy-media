<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [RegisterController::class, 'home']);

// Create Register from
Route::get('/register', [RegisterController::class, 'register'])->name('register');

//post registration form
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/post', [RegisterController::class, 'post']);
