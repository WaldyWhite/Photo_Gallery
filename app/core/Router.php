<?php

namespace App\core;
define("CONTROLLERS_NAMESPASE","App\\controllers\\");
class Router {

    public static function start () {

        $controllerClassname = "home";

        $routers = explode('/', $_SERVER['REQUEST_URI']);

        if(!empty($routers[1])) {
            $controllerClassname = 'home';
        }
        
        $actionName = empty($routers[1]) ? "index": $routers[1];

        $payload = [];
        if(!empty($routers[2])) {$payload = array_slice($routers, 2); }

        $controllerName = CONTROLLERS_NAMESPASE . ucfirst($controllerClassname);
        
        $controllerFile = ucfirst(strtolower($controllerClassname)) . '.php';
        
        if (file_exists(CONTROLLER . $controllerFile)) {
            include_once CONTROLLER . $controllerFile;
        } else {
            Router::Error();
        }

        $controller = new $controllerName();
        
        if(method_exists($controller, $actionName)) {
            $controller->$actionName($payload);
        } else {
            Router::Error();
        }
     }

     public static function Error () {
        header('HTTP 404 Not Found');
        header('Status 404 Not Found');
        header('Location:/error');
     }
}   