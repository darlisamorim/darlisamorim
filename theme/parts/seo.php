    <!--
      Schema Microdata
      https://schema.org or https://schema.org/WebSite
    -->
    <meta itemprop="name" content=" | <?= DAA_SUBNAME; ?>" />
    <meta itemprop="description" content="<?= DAA_DESCRIPTION; ?>" />
    <meta itemprop="url" content="<?= DOMAIN; ?>" />
    <meta itemprop="image" content="<?= DOMAIN; ?>/_storage/images/<?= DAA_IMAGE_SHARE; ?>" />

    <!--
      Facebook Open Graph
      https://ogp.me/
     -->
    <meta property="og:title" content="<?= DAA_NAME; ?> | <?= DAA_SUBNAME; ?>" />
    <meta property="og:description" content="<?= DAA_DESCRIPTION; ?>" />
    <meta property="og:url" content="<?= DOMAIN; ?>" />
    <meta property="og:image" content="<?= DOMAIN; ?>/_storage/images/<?= DAA_IMAGE_SHARE; ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:image:alt" content="<?= DAA_NAME; ?> | <?= DAA_DESCRIPTION; ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <meta property="og:site_name" content="<?= DAA_NAME; ?>" />
    <meta property="og:locale" content="pt_BR" />
    <!-- Pay attention to these items below, because they are similar but each goal has its own attribute -->
    <meta property="og:app_id" content="<?= DAA_FB_APP_ID; ?>" />
    <meta property="fb:pages" content="<?= DAA_FB_PAGE_ID; ?>" />
    <meta property="article:author" content="<?= DAA_LINKEDIN; ?>" /> <!-- {FACEBOOK_PAGE_AUTHOR} -->
    <meta property="article:publisher" content="<?= DAA_LINKEDIN; ?>" /> <!-- {FACEBOOK_PAGE} -->

    <!--
      Twitter Microdata
      https://developer.twitter.com/en/docs/twitter-for-websites/cards/guides/getting-started
     -->
     <meta property="twitter:title" content="<?= DAA_NAME; ?> | <?= DAA_SUBNAME; ?>" />
     <meta property="twitter:description" content="<?= DAA_DESCRIPTION; ?>" />
     <meta property="twitter:url" content="<?= DOMAIN; ?>" />
     <meta property="twitter:image" content="<?= DOMAIN; ?>/_storage/images/<?= DAA_IMAGE_SHARE; ?>" />
     <meta property="twitter:domain" content="<?= DOMAIN; ?>" />
     <meta property="twitter:card" content="summary_large_image" />
     <!-- Options Metas -->
     <meta name="twitter:site" content="<?= DAA_TWITTER; ?>" />
     <meta name="twitter:creator" content="<?= DAA_TWITTER; ?>" />
