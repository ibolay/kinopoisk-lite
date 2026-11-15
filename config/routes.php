<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Kernel\Router\Route;

return [
    Route::get(
        uri: '/kinopoisk-lite',
        action: [HomeController::class, 'index']
    ),

    Route::get(
        uri: '/kinopoisk-lite/',
        action: [HomeController::class, 'index']
    ),

    Route::get(
        uri: '/kinopoisk-lite/register',
        action: [RegisterController::class, 'index']
    ),

    Route::post(
        uri: '/kinopoisk-lite/register',
        action: [RegisterController::class, 'register']
    ),

    Route::get(
        uri: '/kinopoisk-lite/login',
        action: [LoginController::class, 'index']
    ),
    
    Route::post(
        uri: '/kinopoisk-lite/login',
        action: [LoginController::class, 'login']
    ),
];