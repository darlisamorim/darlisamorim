<?php

namespace Source\Controllers;

class Web
{
    public function home($data): void
    {
        require __DIR__ . "/../../theme/home.php";
    }

    public function source($data): void
    {
        require __DIR__ . "/../../theme/source.php";
    }

    public function error($data): void
    {
        require __DIR__ . "/../../theme/404.php";
    }
}