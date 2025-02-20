<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Form page
Route::get('/form', [WelcomeController::class, 'showForm'])->name('form');

// Handle form submission
Route::post('/submit', [WelcomeController::class, 'store'])->name('submit');