<?php
namespace App\Router;

use App\Controller\UserController;

global $strController;

findOutPathController();
findOutRouteHttpMethod();

function findOutPathController()
{
    global $strController;

    $uri = $_SERVER["REQUEST_URI"];
    if ($uri == "/") {
        $strController = "UserController";
    } else {
        $findClassNameRegex = "/([^\/]+)\.php$/";
        preg_match($findClassNameRegex, $uri, $matches);
        $strController = str_replace("Router", "Controller", $matches[1]);
    }

    if ($matches != null) {
        var_dump($matches);
    }
}

function findOutRouteHttpMethod()
{
    if (existController()) {
        $controller = new UserController;

        switch ($_SERVER["REQUEST_METHOD"]) {
            case "GET":
                var_dump("GET");

                $listUsers = $controller->findAll();
                var_dump($listUsers);
                break;

            case "POST":
                var_dump("POST");

                $controller->save();
                break;
            default:
                header("HTTP/1.0 404 Not Found");
        }
    } else {
        echo "<p>Controller does not exist</p>";
    }
}

function existController(): bool
{
    global $strController;

    var_dump($strController);

    $result = class_exists($strController);

    if ($result) {
        var_dump("Deu bom");
    } else {
        var_dump("Deu ruim");
    }
    return $result;
}
