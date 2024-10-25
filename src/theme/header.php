<!DOCTYPE html>
<html lang="fr">
    <head>

            <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-J5E2EYNYKS"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-J5E2EYNYKS');
        </script>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Page d'accueil de mon Portfolio">
        <meta name="author" content="Wilem Lavoie">

        <title><?php wp_title() ?></title>
        <?php wp_head(); ?>
       
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/dist/styles/main.css">

        <script>
            iconsPath = '<?php bloginfo('template_url') ?>/dist/';
        </script>

        <script src="<?php bloginfo('template_url') ?>/dist/scripts/main.js" defer></script>
    </head>

    <body <?php body_class(); ?> data-component='Scrolly'>
       <section data-component="Scroll">
        <header class="header" data-component="Header" data-scrolly="fromTop">
            <div class="wrapper">

            <?php if(get_field('logo_header', 'options')) : ?>
                <a href="<?php bloginfo('url'); ?>" class="header__brand"><svg class="icon" aria-label="Retour à la page d'accueil">
                    <use xlink:href="#icon-<?php the_field('logo_header', 'options'); ?>"></use>
                </svg></a>
                <?php endif; ?>
                
                <?php wp_nav_menu(array(
                'theme_location' => 'menu_principal',
                'container' => 'nav',
                'container_class' => 'nav',
            )); ?>
                <button class="header__toggle js-toggle" aria-label="Ouvrir le menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>                
            </div>
      
        </header>