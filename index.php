<?php

require __DIR__ ."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_PATH);

$router->namespace("Source\Controllers");

$router->group("/");
$router->get("/","ForumController:home");
$router->post("/","ForumController:home");

$router->group("/topics");
$router->get("/{slug}","ForumController:topics");


$router->dispatch();





