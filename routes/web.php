<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [app\Http\Controllers\WelcomeController::class, 'index']);
