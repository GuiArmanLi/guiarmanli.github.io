<?php
namespace App\Router;

use App\Controller\UserController;

$stringController = findOutPathController();
findOutRouteHttpMethod();

function findOutPathController(): string
{
    global $stringController;

    $uri = $_SERVER["REQUEST_URI"];
    $findEndPointRegex = "/([^\/]+)\.php$/";
    preg_match($findEndPointRegex, $uri, $matches);

    if ($matches != null) {
        $stringController = str_replace("Router", "Controller", $matches[1]);
    } else {
        $stringController = $stringController == null ? "UserController" : null;
    }

    return $stringController;
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
    global $stringController;

    var_dump($stringController);

    $result = class_exists($stringController);

    if ($result) {
        var_dump("Deu bom");
    } else {
        var_dump("Deu ruim");
    }
    return $result;
}
