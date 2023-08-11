<?php
require 'source/environment.php';
?><!DOCTYPE html>
<html lang="<?= DAA_LOCALE; ?>" itemscope itemtype="<?= DAA_SCHEMA; ?>" prefix="og: <?= DAA_SCHEMA_OPEN_GRAPH; ?>">
<!-- Set your country language and website schema -->

<head>
    <meta charset="<?= DAA_CHARSET; ?>"/> <!-- Unicode default( UTF-8 )  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- Default vieweport responsive design -->
    <title><?= DAA_NAME; ?> | <?= DAA_SUBNAME; ?></title> <!-- Website Title -->

    <!-- Defaults Metas -->
    <meta name="description" content="<?= DAA_DESCRIPTION; ?>"/> <!-- Website Description -->
    <meta name="robots" content="index, follow"/> <!-- Allow browsers to index -->
    <meta name="google-site-verification" content="<?= DAA_GOOGLE_VERI; ?>"/> <!-- Tag Google -->

    <!-- Defaults Links -->
    <link rel="base" href="<?= DOMAIN; ?>"/> <!-- Website Url -->
    <link rel="canonical" href="<?= DOMAIN; ?>"/> <!-- Website Url -->
    <link rel="alternate" type="application/rss+xml" href="<?= DOMAIN; ?>/rss.php"/> <!-- RSS Url -->
    <link rel="sitemap" type="application/xml" href="<?= DOMAIN; ?>/sitemap.php"/> <!-- Sitemap Url -->
    <link rel="author" href="<?= DAA_LINKEDIN; ?>"/>
    <!-- Personal profile of the author of the site ( Example Facebook profile )  -->
    <link rel="publisher" href="<?= DAA_LINKEDIN; ?>"/>
    <!-- Personal website page (Example website page on Facebook) -->

    <?php require 'source/seo.php'; ?>
    <!-- All Metas( Itemprop and Property ( Og:, Article:, Twitter: ) ) -->

    <link rel="shortcut icon" href="<?= DOMAIN; ?>/_storage/images/<?= DAA_IMAGE_FAVICON; ?>"/> <!-- Imagem Favicon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=<?= DAA_FONT_NAME; ?>:wght@<?= DAA_FONT_WEIGHT; ?>&display=swap"
          rel="stylesheet"> <!-- Importing font from google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- All Styles -->
    <link rel="stylesheet" href="../../_storage/css/components/cssoo.css"> <!-- Defines CSS -->
    <link rel="stylesheet" href="../../_storage/css/components/normalize.css">
    <!-- Reset CSS -> https://necolas.github.io/normalize.css/ -->
    <link rel="stylesheet" href="_storage/css/components/reset.css"> <!-- Reset CSS -->

    <link rel="stylesheet" href="../../_storage/css/components/boxicons.css"> <!-- Boxicons -> https://boxicons.com/ -->
    <link rel="stylesheet" href="../../_storage/css/components/fontawesome.css">
    <!-- Fontawesome -> https://fontawesome.com/icons -->
    <link rel="stylesheet" href="../../_storage/css/components/line-awesome.css">
    <!-- Line-Awesome -> https://icons8.com/line-awesome -->

    <link rel="stylesheet" href="../../_storage/css/components/iconscout.css">
    <!-- Iconscout -> https://iconscout.com/ *Pending -->
    <link rel="stylesheet" href="../../_storage/css/components/icomoon.css"> <!-- Icomoon -> https://icomoon.io/ *Pending -->

    <link rel="stylesheet" href="../../_storage/css/folds/header.css">
    <link rel="stylesheet" href="../../_storage/css/folds/main.css">
    <link rel="stylesheet" href="../../_storage/css/folds/footer.css">

    <link rel="stylesheet" href="../../_storage/css/components/queries.css"> <!-- Media Queries -->
    <link rel="stylesheet" href="../../_storage/css/components/animate.css"> <!-- Animete Style -->

    <!--[if lt IE 9]>
    <script src=<?= DOMAIN; ?>"/_storage/js/html5shiv.js" ></script>
    <![endif]-->

</head>

<body>

<header class="header container">
    <div class="content__flex">
        <h1 class="header__logotipo">
            <strong>Darlis</strong> Alves Amorim<b>_</b> <span class="dn">| <?= DAA_DESCRIPTION; ?></span>
        </h1>

        <nav class="header__menu">
            <h3 class="fz">
                Navegação | <?= DAA_NAME; ?>
            </h3>
            <ul>
                <li><a title="Portfólios | <?= DAA_NAME; ?>" href="">Portfólios</a></li>
                <li><a title="Open Source | <?= DAA_NAME; ?>" href="">Open Source</a></li>
                <li><a title="Notas | <?= DAA_NAME; ?>" href="">Notas</a></li>
            </ul>
        </nav>
        <ul class="header__tools">
            <li class="dn">
                <i class='bx bxs-sun'></i>
            </li>
            <li class="dn">
                <i class='bx bxs-moon'></i>
            </li>
            <li>
                <a title="Links Sociais | <?= DAA_NAME; ?>" href="<?= DAA_LINKS; ?>" target="_blank">
                    <i class='bx bxs-share-alt'></i>
                    Social
                </a>
            </li>
            <li>
                <a title="GitHub | <?= DAA_NAME; ?>" href="https://www.github.com/<?= DAA_GITHUB; ?>" target="_blank">
                    <i class='bx bxl-github'></i>
                    GitHub
                </a>
            </li>
            <li>
                <a title="Linkedin | <?= DAA_NAME; ?>" href="<?= DAA_LINKEDIN; ?>" target="_blank">
                    <i class='bx bxl-linkedin-square'></i>
                    Linkedin
                </a>
            </li>
            <li class="dn">
                <i class='bx bx-menu'></i>
                <i class='bx bx-menu-alt-right'></i>
            </li>
        </ul>

    </div>

    <div class="content__flex">
        <article class="header__article">
            <header class="header__article__group">
                <h2>
                    <?= DAA_OFFICE; ?>
                </h2>
                <h3>
                    <?= DAA_SUBNAME; ?>
                </h3>
            </header>
            <p>
                <?= DAA_DESCRIPTION; ?>
            </p>
            <button><i class="bx bxs-download"></i> Download CV</button>
        </article>
        <figure class="header__figure">
            <img width="440" src="<?= DOMAIN; ?>/_storage/images/developer.svg" title="<?= DAA_NAME; ?>"
                 alt="<?= DAA_DESCRIPTION; ?>">
        </figure>
    </div>


</header>
<!-- Fim Header > container -->