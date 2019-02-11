<?php

    $recent_posts = wp_get_recent_posts(array('numberposts' => 5));

    for($i = 0; $i < count($recent_posts); $i++) {
        $recent_posts[$i]['post_content'] = ltrim($recent_posts[$i]['post_content']);
        $recent_posts[$i]['author'] = get_the_author_meta('first_name', $recent_posts[$i]['post_author']).' '.get_the_author_meta('last_name', $recent_posts[$i]['post_author']);
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>XXX Festiwal Teatralny</title>

        <!--CSS-->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/general.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header/header.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header/header.nav.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header/header.logo.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header/header.title.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/programme/programme.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/programme/programme.content.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news/news.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news/news.curl.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news/news.content.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news/news.dots.css" />

        <!--JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="XXX FT" class="logo">
            <h1 class="title">
                <span>XXX</span> Festiwal<br>
                Teatralny
            </h1>
            <nav>
                <a href="#" data-anchor="/ strona główna /" >/ sg /</a>
                <a href="#" data-anchor="/ sklep /">/ sk /</a>
                <a href="#" data-anchor="/ forum /">/ fo /</a>
                <a href="#" data-anchor="/ harmonogram /">/ ha /</a>
                <a href="#" data-anchor="/ o festiwalu /">/ of /</a>
                <a href="#" data-anchor="/ sponsorzy /">/ sp /</a>
                <a href="#" data-anchor="/ kontakt /">/ ko /</a>
            </nav>
        </header>
        <section class="gallery">

        </section>
        <section class="programme">
            <p class="title">Repertuar na <span class="date"></span>:</p>
            <ul>
                <li>
                    12:00 - Spektakl 1<br>
                    <span class="author">(Imię Nazwisko)</span>
                </li>
                <li>
                    13:00 - Spektakl 2<br>
                    <span class="author">(Imię Nazwisko)</span>
                </li>
                <li>
                    14:00 - Spektakl 3<br>
                    <span class="author">(Imię Nazwisko)</span>
                </li>
                <li>
                    15:00 - Spektakl 4<br>
                    <span class="author">(Imię Nazwisko)</span>
                </li>
                <li>
                    16:00 - Spektakl 5<br>
                    <span class="author">(Imię Nazwisko)</span>
                </li>
            </ul>
        </section>
        <section class="news">
            <img src="<?php echo get_template_directory_uri(); ?>/img/zawijas.svg" class="curl">
            <p class="title">Co nowego...</p>
            <article>Początek traktatu czasu być miały z mądrych przyczyn nie czyni, ale to pytanie; Czemuż Dobro jest zewnątrz święta czyli godności stania się być może, ani mniej się przygody na. świat są w przekładzie tym ciemne miejsca i gdyby niebyło najwyższego dobra, a wyraz rum zamiast przestrzeń. aaaaa aaaaaaa aaaaaaa aaaaaa aaaaa aaaaaaaaaaaaa aaaaaaaaaaa aaaaaaaa a aaaaaaa</article>
            <p class="author">Imię Nazwisko</p>
            <div class="dots"></div>
        </section>

        <!--JS-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/header.nav.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/programme.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/news.content.js"></script>
        <script>
            var recent_posts = JSON.parse('<?php echo json_encode($recent_posts); ?>');

            for(var i = 0; i < recent_posts.length; i++) {
                $('.news .dots').append('<div class="dot"></div>');
            }
        </script>
    </body>
</html>