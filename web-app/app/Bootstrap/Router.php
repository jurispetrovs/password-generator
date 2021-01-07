<?php

namespace App\Bootstrap;

use FastRoute;

class Router
{
    public function setUp()
    {
        $dispatcher = require_once 'Routes.php';

        // Fetch method and URI from somewhere
        if (isset($_POST['_method'])) {
            $httpMethod = $_POST['_method'];
        } else {
            $httpMethod = $_SERVER['REQUEST_METHOD'];
        }
        // $httpMethod = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD']; //allowed since PHP 7.0
        $uri = $_SERVER['REQUEST_URI'];

        // Strip query string (?foo=bar) and decode URI
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);

        $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
        switch ($routeInfo[0]) {
            case FastRoute\Dispatcher::NOT_FOUND:
                echo '404 PAGE NOT FOUND';
                break;
            case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = $routeInfo[1];
                echo 'METHOD NOT ALLOWED';
                break;
            case FastRoute\Dispatcher::FOUND:
                $route = explode('@', $routeInfo[1]);
                $controller = $route[0];
                $method = $route[1];

                // [$controller, $method] = explode('@', $routeInfo[1]); //allowed since PHP 7.1
                $vars = $routeInfo[2];

                (new $controller)->$method($vars);

                break;
        }
    }
}