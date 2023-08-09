<?php

// URL BASE
define('BASE', 'www.darlisalvesamorim.com'); // Url raiz do website

// Verify if in server localhost or hosting
if($_SERVER['HTTP_HOST'] == 'localhost'):
    define('DOMAIN', 'http://localhost/darlisamorim'); // Url localhost do website
else:
    define('DOMAIN', 'https://www.darlisalvesamorim.dev'); // Url raiz do website
endif;