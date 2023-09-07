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
function assetTheme(string $path): string
{

    if(!empty(DOMAIN . "/theme/assets/{$path}")) {
        return DOMAIN . "/theme/assets/{$path}";
    };

    return true;
}
function assetShared(string $path): string
{
    if(!empty( DOMAIN . "/shared/{$path}") ) {
        return DOMAIN . "/shared/{$path}";
    };

    return true;
}

//function asset(string $path): string
//{
    //    if(!empty(DOMAIN . "/theme/assets/{$path}")) {
    //        return DOMAIN . "/theme/assets/{$path}";
    //    } elseif (!empty( DOMAIN . "/shared/assets/{$path}")){
    //        return DOMAIN . "/shared/assets/{$path}";
    //    };

    //    return DOMAIN . "/theme/assets/{$path}";
    //    return DOMAIN . "/shared/assets/{$path}";

    //    return true;


//    if(!empty(DOMAIN . "/theme/assets/{$path}")) {
//        return DOMAIN . "/theme/assets/{$path}";
//    };
//
//    if(!empty( DOMAIN . "/shared/assets/{$path}") ) {
//        return DOMAIN . "/shared/assets/{$path}";
//    };
//
//    return true;
//}

//function asset(string $path, $time = true): string
//{
//    $file = DOMAIN . "/theme/assets/{$path}";
//    $fileOnDir = dirname( __DIR__, 1) . "/theme/assets/{$path}";
//    if ($time && file_exists($fileOnDir)){
//        $file = "?time=" . filemtime($fileOnDir);
//    }
//    return $file;
//}


//function flash(string $type = null, string $message = null): ?string
//{
//    if($type && $message){
//        $_SESSION["flash"] = [
//            "type" => $type,
//            "message" => $message
//        ];
//
//        return null;
//    }
//
//    if(!empty($_SESSION["flash"]) && $flash = $_SESSION["flash"]) {
//        unset($_SESSION["flash"]);
//        return "<div class=\"message {$flash[$type]}\">{$flash["message"]}</div>";
//    }
//
//    return null;
//}