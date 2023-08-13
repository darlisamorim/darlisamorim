<?php

namespace Source\Controllers;

class bBK
{
    public function home($data): void
    {
        echo "<h1>Home!</h1>";
        var_dump($data);
    }

    public function source($data): void
    {
        echo "<h1>Source!</h1>";
        var_dump($data);
    }

    public function error($data): void
    {
        echo "<h1>Error {$data["errcode"]}!</h1>";
        var_dump($data);
    }
}