<?php

class Router {
    private $routes = [];

    public function __construct() {
        $this->routes = [
            'fundraiser' => ['controller' => 'FundraiserController', 'method' => 'handle']
        ];
    }

    public function dispatch($url) {
        $url = trim($url, '/');
        if (array_key_exists($url, $this->routes)) {
            $controller = $this->routes[$url]['controller'];
            $method = $this->routes[$url]['method'];

            // Assuming controllers are in the "src" directory and have the namespace "src"
            $controller = "\\src\\$controller";
            if (class_exists($controller)) {
                $object = new $controller;
                if (method_exists($object, $method)) {
                    $object->$method();
                } else {
                    echo "404 Not Found - Method not found";
                }
            } else {
                echo "404 Not Found - Controller not found";
            }
        } else {
            // Handle not found
            echo "404 Not Found - Route not found";
        }
    }
}
