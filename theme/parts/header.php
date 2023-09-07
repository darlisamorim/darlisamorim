<!DOCTYPE html>
<html lang="<?= WEBSITE["locale"] ?>" itemscope itemtype="<?= WEBSITE["schema"] ?>" prefix="og: <?= WEBSITE["schemaog"] ?>"> <!-- Set your country language and website schema -->
<head>
    <meta charset="<?= WEBSITE["charset"] ?>" /> <!-- Unicode default( UTF-8 )  -->
    <meta name="viewport" content="<?= WEBSITE["viewport"] ?>" />
    <title><?= WEBSITE["name"] ?> | <?= WEBSITE["subname"] ?></title>

    <!-- Defaults Metas -->
    <meta name="description" content="<?= WEBSITE["description"] ?>" />
    <meta name="robots" content="<?= WEBSITE["robots"] ?>" /> <!-- Allow browsers to index -->
    <meta name="google-site-verification" content="<?= GOOGLE["googleverify"] ?>" /> <!-- Tag Google -->

    <!-- Defaults Links -->
    <link rel="base" href="<?= DOMAIN ?>" /> <!-- Website Url -->
    <link rel="canonical" href="<?= DOMAIN ?>" /> <!-- Website Url -->
    <link rel="alternate" type="application/rss+xml" href="<?= DOMAIN ?>" /> <!-- RSS Url -->
    <link rel="sitemap" type="application/xml" href="<?= DOMAIN ?>/sitemap.php" /> <!-- Sitemap Url -->
    <link rel="author" href="<?= METAS["linkedin"] ?>" /> <!-- Personal profile of the author of the site ( Example Facebook profile )  -->
    <link rel="publisher" href="<?= METAS["facebook_page"] ?>" /> <!-- Personal website page (Example website page on Facebook) -->

    <!-- All Metas( Itemprop and Property ( Og:, Article:, Twitter: ) ) --> 
    <?php require ('seo.php'); ?>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= assetTheme("images/favicon.svg") ?>" /> <!-- Imagem Favicon -->

    <!-- Importing font from google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=<?= GOOGLE["fontname"] ?>:wght@<?= GOOGLE["fontweight"] ?>&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=<?= GOOGLE["fontname_last"] ?>:wght@<?= GOOGLE["fontweight_last"] ?>&display=swap" rel="stylesheet">

    <!-- All CSS -->
    <link rel="stylesheet" href="<?= assetShared("css/build.css") ?>"> <!-- Default CSS -->
    <link rel="stylesheet" href="<?= assetTheme("css/style.css") ?>"> <!-- Default CSS -->

    <!--[if lt IE 9]>
    <script src="<?= assetShared("js/html5shiv.js") ?>"></script>
    <![endif]-->

</head>
<body>

<header class="header container__flex">

    <div class="content__flex">

        <h1 class="logotipo">
            <a title="<?= WEBSITE["name"] ?> | <?= WEBSITE["description"] ?>" href="<?= DOMAIN; ?>">
                Darlis
                <b>A. Amorim<span>_</span></b>
                <span class="fz">| <?= WEBSITE["description"] ?>.</span>
            </a>
        </h1>
        <!-- Fim Logotipo -->

        <nav class="nav__menu">
            <h3 class="fz">Navegação | <?= WEBSITE["name"] ?></h3>
            <ul>
                <li><a title="Página Inicial | <?= WEBSITE["name"] ?>" href="#">Home</a></li>
                <li><a title="Sobre Mim| <?= WEBSITE["name"] ?>" href="#">Sobre Mim</a></li>
                <li><a title="Projetos Gratuitos | <?= WEBSITE["name"] ?>" href="#">Open Source</a></li>
                <li><a title="Fale Comigo | <?= WEBSITE["name"] ?>" href="#">Fale Comigo</a></li>
            </ul>
            <!-- Fim Ul -->
        </nav>
        <!-- Fim Nav -->

        <ul class="nav__contact">
            <li><a title="LinkedIn | <?= WEBSITE["name"] ?>" href="<?= METAS["linkedin"] ?>" target="_blank"><i class='bx bxl-linkedin' ></i> LinkedIn</a></li>
            <li><a title="GitHub | <?= WEBSITE["name"] ?>" href="<?= METAS["github"] ?>" target="_blank"><i class='bx bxl-github' ></i> GitHub</a></li>
            <li><a title="E-mail | <?= WEBSITE["name"] ?>" href="mailto:<?= WEBSITE["email"] ?>"><i class='bx bxs-envelope' ></i> E-mail</a></li>
        </ul>

    </div>
    <!-- Fim Content -->

</header>
<!-- Fim Header > container -->