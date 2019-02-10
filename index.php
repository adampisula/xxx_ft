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
            <ul></ul>
        </section>
        <section class="news">
            <img src="<?php echo get_template_directory_uri(); ?>/img/zawijas.svg" class="curl">
            <p class="title">Co nowego...</p>
            <article></article>
            <p class="author"></p>
            <div class="dots"></div>
        </section>

        <!--JS-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/header.nav.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/programme.js"></script>
        <!--JS - PROGRAMME-->
        <script>
            var programme = JSON.parse('<?php echo str_replace("\n", "", file_get_contents(get_template_directory_uri().'/programme.json')); ?>');
            var today_programme = programme[('0' + now.getDate()).slice(-2) + '_' + ('0' + (now.getMonth() + 1)).slice(-2)];

            console.log(today_programme);

            for(var i = 0; i < today_programme.length; i++)
                $('.programme ul').append('<li>' + today_programme[i]['time'] + ' - ' + today_programme[i]['title'] + '<br><span class="author">' + today_programme[i]['author'] + '</span></li>');
        </script>
        <!--JS - NEWS-->
        <script>
            var recent_posts = JSON.parse('<?php echo json_encode($recent_posts); ?>');

            for(var i = 0; i < recent_posts.length; i++)
                $('.news .dots').append('<div class="dot" name="post-' + i + '"></div>');

            $('.news .dots .dot').on('click', function() {
                var post = recent_posts[$(this).attr('name').split('post-')[1]];

                $('.news article').fadeOut(150);
                $('.news .author').fadeOut(150);

                setTimeout(function() {
                    $('.news article').text(post['post_content']);
                    $('.news article').fadeIn(150);

                    $('.news .author').text(post['author']);
                    $('.news .author').fadeIn(150);

                    while($('.news article').height() >= 343) {
                        var words = $('.news article').text().split(' ');
                        words.pop();

                        $('.news article').text(Array.prototype.join.call(words, ' ') + '...');
                    }

                    $('.news .author').css('top', 73 + $('.news article').height() + 18 + 'px');
                }, 150);

                $('.news .dots .dot').each(function() {
                    $(this).removeClass('active');
                });

                $(this).addClass('active');
            });

            if(recent_posts.length > 0) {
                $('.news article').text(recent_posts[0]['post_content']);
                $('.news .author').text(recent_posts[0]['author']);

                $('.news .dots .dot').eq(0).addClass('active');

                while($('.news article').height() >= 343) {
                    var words = $('.news article').text().split(' ');
                    words.pop();

                    $('.news article').text(Array.prototype.join.call(words, ' ') + '...');
                }

                $('.news .author').css('top', 73 + $('.news article').height() + 18 + 'px');
            }
        </script>
    </body>
</html>