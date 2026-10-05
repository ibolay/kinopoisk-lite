<?php

use App\Router\Route;

return [
    Route::get(
        uri: '/kinopoisk-lite/home',
        action: function () {
            include_once APP_PATH . '/views/pages/home.php';
        }
    ),

    Route::get(
        uri: '/kinopoisk-lite/movies',
        action: function () {
            include_once APP_PATH . '/views/pages/movies.php';
        }
    ),
];