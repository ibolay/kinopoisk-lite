<?php

namespace App\Router;

class Router
{

    private array $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function __construct()
    {
        $this -> initRoutes();
    }

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

    private function initRoutes(){
        $routes = $this -> getRoutes();

        foreach ($routes as $route) {
            $this -> routes[$route->getMethod()][$route->getUri()] = $route;
        }
    }

    /**
     * @return Route[]
     */

    private function getRoutes(): array
    {
        return require APP_PATH . '/config/routes.php';
    }
}