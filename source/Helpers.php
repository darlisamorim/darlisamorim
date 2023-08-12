<?php

/**
 * @param string|null $param
 * @return string
 */
function site(string $param = null): string
{
    if($param && !empty($param)) {
        return $param;
    }

    return DOMAIN;
}

/**
 * @param string $path
 * @return string
 */
function asset(string $path): string
{
    return DOMAIN."/theme/assets/{$path}";
}

function flash(string $type = null, string $message = null): ?string
{
    if($type && $message){
        $_SESSION["flash"] = [
            "type" => $type,
            "message" => $message
        ];

        return null;
    }

    if(!empty($_SESSION["flash"]) && $flash = $_SESSION["flash"]) {
        unset($_SESSION["flash"]);
        return "<div class=\"message {$flash[$type]}\">{$flash["message"]}</div>";
    }

    return null;
}