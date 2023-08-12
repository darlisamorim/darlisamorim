<?php

namespace Source\Controllers;

use CoffeeCode\Optimizer\Optimizer;
use CoffeeCode\Router\Router;
use League\Plates\Engine;

abstract class Controller
{
    /** @var Engine */
    protected $view;
    /** @var Router */
    protected $router;
    /** @var Optimizer */
    protected $seo;

    public function __construct($router)
    {
        $this->router = $router;
        $this->view = Engine::create(dirname( __DIR__, 2 ) . "/theme", "php");
        $this->view->addData(["router" => $this->$router]);

        $this->seo = new Optimizer();
        $this->seo->openGraph("", "", "")
            ->publisher("", "")
            ->twitterCard("", "", "")
            ->facebook("");
    }

    public function ajaxResponse(string $param, array $values): string
    {
        return json_encode([$param => $values]);
    }
}