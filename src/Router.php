<?php

namespace App;

use App\FundraiserController;

class Router {
    public function route() {
        $requestUri = $_SERVER['REQUEST_URI'];
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        
        $segments = explode('/', trim($requestUri, '/'));
        $controllerName = ucfirst($segments[0] ?? 'Fundraiser') . 'Controller';
        $action = $segments[1] ?? 'show';
        
        $controllerClass = "App\\{$controllerName}";
        if (!class_exists($controllerClass)) {
            http_response_code(404);
            die('404 - Controller not found');
        }
        
        $controller = new $controllerClass();
        if (!method_exists($controller, $action)) {
            http_response_code(404);
            die('404 - Action not found');
        }
        
        $controller->$action();
    }
}
