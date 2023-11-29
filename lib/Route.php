<?php

namespace Lib;

class Route
{
    private static $routes = [];

    public static function get($uri, $callback)
    {
        self::addRoute('GET', $uri, $callback);
    }

    public static function post($uri, $callback)
    {
        self::addRoute('POST', $uri, $callback);
    }

    private static function addRoute($method, $uri, $callback)
    {
        $uri = trim($uri, '/');
        self::$routes[$method][$uri] = $callback;
    }

    public static function dispatch()
    {
        $uri = self::getRequestUri();
        $method = self::getRequestMethod();

        foreach (self::$routes[$method] as $route => $callback) {
            $routePattern = self::prepareRoutePattern($route);

            if (preg_match($routePattern, $uri, $matches)) {
                $params = array_slice($matches, 1);
                self::handleCallback($callback, $params);
                return;
            }
        }

        self::sendNotFoundResponse();
    }

    private static function getRequestUri()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = trim($uri, '/');

        if (strpos($uri, '?')) {
            $uri = substr($uri, 0, strpos($uri, '?'));
        }

        return $uri;
    }

    private static function getRequestMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    private static function prepareRoutePattern($route)
    {
        if (strpos($route, ':') !== false) {
            $route = preg_replace('#:[a-zA-Z0-9]+#', '([a-zA-Z0-9]+)', $route);
        }

        return "#^$route$#";
    }

    private static function handleCallback($callback, $params)
    {
        if (is_callable($callback)) {
            $response = $callback(...$params);
        } elseif (is_array($callback)) {
            $controller = new $callback[0];
            $response = $controller->{$callback[1]}(...$params);
        } else {
            $response = $callback;
        }

        self::sendResponse($response);
    }

    private static function sendResponse($response)
    {
        if (is_array($response) || is_object($response)) {
            header('Content-Type: application/json');
            echo json_encode($response);
        } else {
            echo $response;
        }
    }

    private static function sendNotFoundResponse()
    {
        header("HTTP/1.0 404 Not Found");
        
        // Ruta al archivo de vista de error 404
        $errorViewPath = __DIR__ . '/../resources/views/errors/404.php';

        // Verifica si la vista existe antes de incluirla
        if (file_exists($errorViewPath)) {
            include $errorViewPath;
        } else {
            // Si la vista no existe, muestra un mensaje predeterminado
            echo '404 Not Found';
        }
    }
}
