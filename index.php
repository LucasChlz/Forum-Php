<?php

require __DIR__ ."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_PATH);

$router->namespace("Source\Controllers");

$router->group(null);
$router->get("/","ForumController:home");
$router->post("/","ForumController:home");

$router->dispatch();





