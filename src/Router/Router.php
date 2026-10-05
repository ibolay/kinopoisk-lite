<?php

namespace App\Router;

class Router
{
    public function dispatch(string $uri): void
    {
        $routes = $this->getRoutes();

        foreach ($routes as $route) {
            if ($route->getUri() === $uri) {
                $action = $route->getAction();
                $action();
                return;
            }
        }
    }

    private function getRoutes(): array
    {
        return require APP_PATH . '/config/routes.php';
    }
}