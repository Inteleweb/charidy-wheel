<?php

class Router {
    public function route() {
        // Get the requested URL path
        $url = $_SERVER['REQUEST_URI'];
        
        // Remove the leading and trailing slashes
        $url = trim($url, '/');
        
        // Split the URL into segments
        $segments = explode('/', $url);
        
        // Extract the controller and action from the segments
        $controllerName = isset($segments[0]) ? ucfirst($segments[0]) . 'Controller' : 'FundraiserController';
        $action = isset($segments[1]) ? $segments[1] : 'show';
        
        // Check if the controller class exists
        if (!class_exists($controllerName)) {
            // Redirect to a 404 page or display an error message
            die('404 - Controller not found');
        }
        
        $controller = new $controllerName();
        
        // Check if the action method exists in the controller
        if (!method_exists($controller, $action)) {
            // Redirect to a 404 page or display an error message
            die('404 - Action not found');
        }
        
        // Call the action method in the controller
        $controller->$action();
    }
}
