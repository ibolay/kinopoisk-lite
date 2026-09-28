<?php

return [
    '/kinopoisk-lite/home' => function () {
        include_once APP_PATH. '/views/pages/home.php';
    },

    '/kinopoisk-lite/movies' => function () {
        include_once APP_PATH. '/views/pages/movies.php';
    },
];