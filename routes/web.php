<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login',  [\App\Http\Controllers\LoginController::class, 'create'])->name('login');
Route::get('/signup',  [\App\Http\Controllers\SignUpController::class, 'create'])->name('signup');
