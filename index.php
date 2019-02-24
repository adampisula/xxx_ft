<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>XXX Festiwal Teatralny</title>

        <!--CSS-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/general.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header/header.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header/header.nav.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header/header.logo.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header/header.title.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header/header.hamburger.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index/container.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index/container.content.css" />

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/smaller/header/header.logo.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/smaller/header/header.nav.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/smaller/index/container.css" />

        <!--JS-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="XXX FT" class="logo"></a>
            <!--<h1 class="title">
                <span>XXX</span> Festiwal<br>
                Teatralny
            </h1>-->
            <div class="hamburger"><span></span><span></span><span></span></div>
            <nav>
                <a href="<?php echo get_home_url(); ?>" data-anchor="/ strona główna /" >/ sg /</a>
                <a href="#" data-anchor="/ forum /">/ fo /</a>
                <a href="<?php echo get_home_url(); ?>/index.php/programme/" data-anchor="/ harmonogram /">/ ha /</a>
                <a href="<?php echo get_home_url(); ?>/index.php/o-festiwalu/" data-anchor="/ o festiwalu /">/ of /</a>
                <a href="#" data-anchor="/ sponsorzy /">/ sp /</a>
                <a href="#" data-anchor="/ kontakt /">/ ko /</a>
            </nav>
        </header>
        <div class="container">
            <h1 class="title"><?php the_title(); ?></h1>
            <?php echo get_post()->post_content; ?>
        </div>
        <script src="<?php echo get_template_directory_uri(); ?>/js/header.nav.js"></script>
    </body>
</html>