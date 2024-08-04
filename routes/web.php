<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup', [UserController::class, 'create'])->name('signup.create');