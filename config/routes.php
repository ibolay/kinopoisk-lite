<?php

return [
    '/kinopoisk-lite/home' => function () {
        include_once __DIR__. '/../views/pages/home.php';
    },

    '/kinopoisk-lite/movies' => function () {
        include_once __DIR__. '/../views/pages/movies.php';
    },
];