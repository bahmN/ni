<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PolicyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/sendRequest', [HomeController::class, 'sendRequest']);

Route::get('/policy', [PolicyController::class, 'index'])->name('policy');
