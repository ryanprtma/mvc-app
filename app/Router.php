<?php

namespace Ryanprtma\MvcApp;

class Router
{

    private static array $routes = [];

    public static function add(
        string $method,
        string $path,
        string $controller,
        string $function,
        array $middlewares = []
    ): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function,
            'middlewares' => $middlewares
        ];
    }

    public static function run(): void
    {
        $path = "/";
        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if ($path == $route['path'] && $method == $route['method']) {

                foreach ($route['middlewares'] as $middleware){
                    $instance = new $middleware;
                    $instance->before();
                }

                $function = $route['function'];

                $controller = new $route['controller'];
                $controller->$function();
                return;
            }
        }

        http_response_code(404);
        echo 'CONTROLLER NOT FOUND';
    }
}