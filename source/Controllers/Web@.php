<?php

namespace Source\Controllers;

use League\Plates\Engine;
use Source\Support\Seo;

class Web
{

    private $view;

    /** @var Seo */
    private $seo;

    public function __construct()
    {
        $this->view = new League\Plates\Engine(__DIR__ . "/../../theme");
        $this->seo = new Seo();
    }

    //  Page Home
    public function home(): void
    {
        $head = $this->seo->render(
            NAME . " — " . SUBDESC,
            DESC,
            url(),
            url() . "/theme/_assets/images/shared.svg"
        );
        echo $this->view->render("home", [
            "head" => $head
        ]);
    }

    //  Page Contact
    public function contact(): void
    {
        $head = $this->seo->render(
            "Fale Comigo  —  " . NAME . " | " . SUBDESC,
            DESC,
            url(),
            url() . "/theme/_assets/images/shared.svg"
        );
        echo $this->view->render("contato", [
            "head" => $head
        ]);
    }


    // All Errors
    public function error(array $data): void
    {
        $head = $this->seo->render(
            "Ooops {$data['errcode']} | " . NAME,
            DESC,
            url("ops/{$data['errcode']}"),
            url() . "/shared/images/notfound.svg"
        );

        echo $this->view->render("error", [
            "head" => $head,
            "error" => $data["errcode"]
        ]);
    }
}