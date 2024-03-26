<?php

namespace App\User;

use App\User\UserController;

findOutRouteHttpMethod();

function findOutRouteHttpMethod()
{
    $controller = 'UserController';
    var_dump(get_declared_classes());
    var_dump(class_exists("App\\User\\" . $controller));


    //class_exists("App\\User\\UserController")
    if (true) {
        $controller = new UserController;
        $httpMethod = $_SERVER["REQUEST_METHOD"];

        if ($httpMethod == "GET" && method_exists($controller, "findAll")) {
            $controller->findAll();

            if ($httpMethod == "POST" && method_exists($controller, "save")) {
                $controller->save();

            }
        }
    } else {
        echo "Classe " . $controller . " nao existe!";
    }
}

function getPathController(): string
{
    $uri = $_SERVER["REQUEST_URI"];
    $findEndPointRegex = "/([^\/]+)\.php$/";
    preg_match($findEndPointRegex, $uri, $matches);

    if ($matches != null) {
        return str_replace("Router", "Controller", $matches[1]);
    } else {
        return "UserController";
    }
}