<?php

require __DIR__ . "/vendor/autoload.php";


use CoffeeCode\Router\Router;

$router = new Router(DOMAIN);

$router->group(null);
$router->get("/", function ($data){
    echo "<h1>Composer AutoLoad 1</h1>";
    var_dump($data);
});

$router->get("/contato", function ($data){
    echo "<h1>Contato</h1>";
    var_dump($data);
});

$router->group("ooooooopps");
$router->get("/{errcode}", function ($data){
    echo "<h1>Erro {$data["errcode"]}</h1>";
    var_dump($data);
});


$router->dispatch();

if($router->error()){
    $router->redirect("/ooooooopps/{$router->error()}");
}
