<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;


/**
 * Url Base
 */
$router = new Router(DOMAIN);


/**
 * Controllers
 */
$router->namespace("Source\Controllers");


/**
 * Web
 * Home
 */
$router->group(null);
$router->get("/", "Web:home");
$router->get("/open-source", "Web:source");


/**
 * 404
 */
$router->group("ooooooopps");
$router->get("/{errcode}", "Web:error");
$router->get("/source", "Web:error");


/**
 * Render
 */
$router->dispatch();


/**
 * Redirect 404
 */
if($router->error()){
    $router->redirect("/ooooooopps/{$router->error()}");
}