<!--
      Schema Microdata
      https://schema.org or https://schema.org/WebSite
    -->
    <meta itemprop="name" content=" | <?= WEBSITE["name"]; ?>" />
    <meta itemprop="description" content="<?= WEBSITE["description"]; ?>" />
    <meta itemprop="url" content="<?= DOMAIN; ?>" />
    <meta itemprop="image" content="<?= assetTheme("images/shared.svg") ?>" />

    <!--
      Facebook Open Graph
      https://ogp.me/
     -->
    <meta property="og:title" content="<?= WEBSITE["name"] ?> | <?= WEBSITE["subname"] ?>" />
    <meta property="og:description" content="<?= WEBSITE["description"]; ?>" />
    <meta property="og:url" content="<?= DOMAIN; ?>" />
    <meta property="og:image" content="<?= assetTheme("images/shared.svg") ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:image:alt" content="<?= WEBSITE["name"] ?> | <?= WEBSITE["subname"] ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <meta property="og:site_name" content="<?= WEBSITE["name"] ?> | <?= WEBSITE["subname"] ?>" />
    <meta property="og:locale" content="pt_BR" />
    <!-- Pay attention to these items below, because they are similar but each goal has its own attribute -->
    <meta property="fb:pages" content="<?= METAS["facebook_page_ID"] ?>" />
    <meta property="og:app_id" content="<?= METAS["facebook_app_ID"] ?>" />
    <meta property="article:author" content="<?= METAS["linkedin"] ?>" /> <!-- {FACEBOOK_PAGE_AUTHOR} -->
    <meta property="article:publisher" content="<?= METAS["facebook_page"] ?>" /> <!-- {FACEBOOK_PAGE} -->

    <!--
      Twitter Microdata
      https://developer.twitter.com/en/docs/twitter-for-websites/cards/guides/getting-started
     -->
    <meta property="twitter:title" content="<?= WEBSITE["name"] ?> | <?= WEBSITE["subname"] ?>" />
    <meta property="twitter:description" content="<?= WEBSITE["description"] ?>" />
    <meta property="twitter:url" content="<?= DOMAIN; ?>" />
    <meta property="twitter:image" content="<?= assetTheme("images/shared.svg") ?>" />
    <meta property="twitter:domain" content="<?= DOMAIN; ?>" />
    <meta property="twitter:card" content="summary_large_image" />
    <!-- Options Metas -->
    <meta name="twitter:site" content="<?= METAS["twitter"] ?>" />
    <meta name="twitter:creator" content="<?= METAS["twitter"] ?>" />
