<?php

use App\Models\Car;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', function () {
    return view('blog');
});

Route::get('/cars/{car}', [CarController::class, 'show'])
    ->name('cars.show');

Route::get('/listing', function () {
    return view('listing-list');
});

Route::get('/cars/search', [CarController::class, 'search'])
    ->name('cars.search');

Route::get('/cars/models', [CarController::class, 'models'])
    ->name('cars.models');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');