<?php

// URL BASE
define('BASE', 'https://darlisalvesamorim.dev'); // Url raiz do website

// Verify if in server localhost or hosting
if($_SERVER['HTTP_HOST'] == 'localhost'):
    define('DOMAIN', 'http://localhost/darlisamorim'); // Url localhost do website
else:
    define('DOMAIN', 'https://darlisalvesamorim.dev'); // Url raiz do website
endif;

// Url Param
function url(string $uri = null): string
{
    if ($uri) {
        return DOMAIN . "/{$uri}";
    }

    return DOMAIN;
}

// Default Website
define("WEBSITE", [

    // Metas Tags
    "locale" => "pt-br",
    // "schema" => "https://schema.org/WebSite",
    "schema" => "https://schema.org/WebSite",
    "schemaog" => "https://ogp.me/ns#",
    "charset" => "UTF-8",
    "viewport" => "width=device-width, initial-scale=1.0",
    "robots" => "index, follow",
    // "root" => "http://localhost/darlisamorim",

    // Imagens Defaults
    "logotipo" => "logotipo.svg",
    "avatar" => "avatar.svg",
    "share" => "default.svg",
    "favicon" => "favicon.svg",
    "error" => "404.svg",
    "summary" => "dLs.pdf",

    // Website Infos
    "name" => "Darlis Alves Amorim_",
    "office" => "Developer & Design",
    "subname" => "Software Engineer end Full Stack Developer of São Paulo/SP",
    "description" => "Software Engineer end Full Stack Developer Freelancer Front-end & Back-end of São Paulo/SP",

    "email" => "eu@darlisalvesamorim.dev",
    "rs" => "Darlis Alves Amorim_ | Software Engineer end Full Stack Developer",
    "cnpj" => "4",
    "ie" => "4",
    "phone" => "+55 (11) 9X6-27X-72X",
    "address" => "Av. Interlagos, 4944",
    "city" => "São Paulo",
    "district" => "SP/Zona Sul",
    "uf" => "SP",
    "zip" => "04777-000",
    "country" => "Brasil",
    "age" => date('Y') - 1995

]);


define("GOOGLE", [
    /*
     * Settings Google
     *
     * font-family: 'Roboto Mono', monospace; -> 100;200;300;400;500;600;700
     *
     * font-family: 'Maven Pro', sans-serif; -> 400;500;600;700;800;900
     *
     * font-family: 'Source Code Pro', monospace; -> 200;300;400;500;600;700;800;900
     *
     * font-family: 'Raleway', sans-serif; -> 100;200;300;400;500;600;700;800;900
     *
    */
    "fontname" => "Source+Code+Pro",
    "fontweight" => "200;300;400;500;600;700;800;900",
    "fontname_last" => "Raleway",
    "fontweight_last" => "100;200;300;400;500;600;700;800;900",
    "googleverify" => "coding",
]);


define("METAS", [

    // Links
    "links" => "https://linktr.ee/darlisamorim",

    // Facebook
    // "facebook" => "@darlisamorim",
    "facebook" => "https://www.facebook.com/darlisalvesamorim",
    "facebook_page" => "https://www.facebook.com/darlisamorim",
    "facebook_page_ID" => "22222",
    "facebook_app_ID" => "22222",

    // Twitter
    "twitter" => "@darlisamorim",
    // "twitter_creator" => "@darlisamorim",
    // "twitter_site" => "@darlisamorim",

    // Linkedin
    "linkedin" => "https://www.linkedin.com/in/darlisamorim",

    // Nets
    "instagram" => "darlisamorim",
    "github" => "https://github.com/darlisamorim",
    "codepen" => "darlisamorim",
    "devto" => "darlisamorim",
    "medium" => "@darlisamorim",
    "dribbble" => "darlisamorim",
    "behance" => "darlisamorim",
    "deviantart" => "darlisamorim",
    "pinterest" => "darlisamorim",
    "tiktok" => "@darlisamorim"
]);

// Mail
define("MAIL", [
    // Server
    "host" => "smtp.hostinger.com", // SMTP
    "mode" => "ssl", // SSL/TLS
    "port" => "465", // PORTA

    // User Server
    "user" => "eu@darlisalvesamorim.dev", // eu@eu....
    "passwd" => "SENHA", // SENHA

    // Content E-mail
    "sender" => "Darlis A. Amorim | Developer & Design", // Remetente

    // Verify
    "testing" => "test@darlisalvesamorim.dev" // Rementente de Tes; eu@test....
]);


// Minify Website



// Database Website
define("DATABASE", []);
const DATA_LAYER_CONFIG = [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "dls",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
];