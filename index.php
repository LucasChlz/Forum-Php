<?php

require __DIR__ ."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_PATH);

$router->namespace("Source\Controllers");

$router->group("/");
$router->get("/","ForumController:home");
$router->post("/","ForumController:home");

$router->group("/topics");
$router->get("/{slugForum}","ForumController:topics");
$router->post("/{slugForum}","ForumController:topics");

$router->group("/post");
$router->get("/{slugForum}/{slugTopic}","ForumController:posts");

$router->group("/create");
$router->get("/{slugForum}/{slugTopic}","ForumController:createPost");
$router->post("/{slugForum}/{slugTopic}","ForumController:createPost");



$router->dispatch();





