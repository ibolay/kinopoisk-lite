<?php

use App\Controllers\HomeController;
use App\Controllers\MovieController;
use App\Kernel\Router\Route;

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
        uri: '/kinopoisk-lite/admin/movies/add',
        action: [MovieController::class, 'add']
    ),

    Route::post(
        uri: '/kinopoisk-lite/admin/movies/add',
        action: [MovieController::class, 'store']
    ),

    Route::get(
        uri: '/kinopoisk-lite/test',
        action: function () {
            echo 'test';
        }
    ),
];