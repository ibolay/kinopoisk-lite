<?php

use App\Controllers\HomeController;
use App\Controllers\MovieController;
use App\Router\Route;

return [
    Route::get(
        uri: '/kinopoisk-lite/home',
        action: [HomeController::class, 'index']
    ),

    Route::get(
        uri: '/kinopoisk-lite/movies',
        action: [MovieController::class, 'index']
    ),

    Route::get(
        uri: '/kinopoisk-lite/test',
        action: function () {
            echo 'test';
        }
    ),
];