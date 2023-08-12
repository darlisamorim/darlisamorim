<?php

// URL BASE
define('BASE', 'www.darlisalvesamorim.com'); // Url raiz do website

// Verify if in server localhost or hosting
if($_SERVER['HTTP_HOST'] == 'localhost'):
    define('DOMAIN', 'http://localhost/darlisamorim'); // Url localhost do website
else:
    define('DOMAIN', 'https://darlisalvesamorim.dev'); // Url raiz do website
endif;


// Minify Website
if($_SERVER["SERVER_NAME"] == "localhost"){
    require __DIR__ . "/Minify.php";
}

// Database Website

define("DATABASE", [

]);
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


// Default Website
define("WEBSITE", [

    // Metas Tags
    "locale" => "pt-br",
    // "schema" => "https://schema.org/WebSite",
    "schema" => "WebSite",
    "schemaog" => "https://ogp.me/ns#",
    "charset" => "UTF-8",
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
    "googleverify" => "coding",
]);


define("NETWORKS", [
    "links" => "https://linktr.ee/darlisamorim",
    "linkedin" => "https://www.linkedin.com/in/darlisamorim",
    "twitter" => "@darlisamorim",
    "facebook" => "@darlisamorim",
    "instagram" => "darlisamorim",
    "github" => "darlisamorim",
    "codepen" => "darlisamorim",
    "devto" => "darlisamorim",
    "medium" => "@darlisamorim",
    "dribbble" => "darlisamorim",
    "behance" => "darlisamorim",
    "deviantart" => "darlisamorim",
    "pinterest" => "darlisamorim",
    "tiktok" => "@darlisamorim"
]);


define("SEO", [
    // Facebook
    "facebook" => "https://www.facebook.com/darlisalvesamorim",
    "facebook_page" => "https://www.facebook.com/darlisamorim",
    "facebook_page_ID" => "22222",
    "facebook_app_ID" => "22222",

    // Twitter
    "twitter_creator" => "",
    "twitter_site" => "",
]);
