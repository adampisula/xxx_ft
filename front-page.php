<?php

    $recent_posts = wp_get_recent_posts(array('numberposts' => 5));

    for($i = 0; $i < count($recent_posts); $i++) {
        $recent_posts[$i]['post_content'] = ltrim($recent_posts[$i]['post_content']);
        $recent_posts[$i]['post_content'] = str_replace("\"", "\\\"", $recent_posts[$i]['post_content']);
        $recent_posts[$i]['post_content'] = str_replace("\n", "<br>", $recent_posts[$i]['post_content']);
        $recent_posts[$i]['author'] = get_the_author_meta('first_name', $recent_posts[$i]['post_author']).' '.get_the_author_meta('last_name', $recent_posts[$i]['post_author']);
    }

?>
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
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home/programme/programme.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home/programme/programme.content.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home/news/news.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home/news/news.curl.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home/news/news.content.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home/news/news.dots.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home/gallery/gallery.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home/gallery/gallery.photo.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home/gallery/gallery.caption.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home/gallery/gallery.dots.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home/about/about.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home/about/about.content.css" />

        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/smaller/home/gallery.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/smaller/home/news.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/smaller/home/programme.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/smaller/home/about.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/smaller/header/header.logo.css" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/smaller/header/header.nav.css" />

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
                <a href="<?php echo get_home_url(); ?>/index.php/aktualnosci/" data-anchor="/ aktualności /">/ ak /</a>
                <a href="<?php echo get_home_url(); ?>/index.php/programme/" data-anchor="/ harmonogram /">/ ha /</a>
                <a href="<?php echo get_home_url(); ?>/index.php/o-festiwalu/" data-anchor="/ o festiwalu /">/ of /</a>
                <!--<a href="<?php echo get_home_url(); ?>/index.php/sponsorzy/" data-anchor="/ sponsorzy /">/ sp /</a>-->
                <a href="<?php echo get_home_url(); ?>/index.php/kontakt/" data-anchor="/ kontakt /">/ ko /</a>
            </nav>
        </header>
        <section class="gallery">
            <div class="photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/uploads/1.jpg');">
            </div>
            <div class="photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/uploads/2.jpg');">
            </div>
            <div class="photo" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/uploads/3.jpg');">
            </div>
            <div class="dots"></div>
        </section>
        <section class="programme">
            <p class="title">Repertuar na <span class="date"></span>:</p>
            <ul></ul>
        </section>
        <section class="news">
            <img src="<?php echo get_template_directory_uri(); ?>/img/zawijas.svg" class="curl">
            <p class="title">Co nowego...</p>
            <article></article>
            <!--<p class="author"></p>-->
            <div class="dots"></div>
        </section>
        <section class="about">
            <p class="title">O Festiwalu...</p>
            <article><p>Festiwal Teatralny III LO im. Stefana Batorego w Chorzowie to wieloletnia szkolna tradycja zapoczątkowana w 1989 roku z inicjatywy nauczycielskiej. Od początku jego głównym celem było umożliwienie uczniom zaistnienia na scenie i tę rolę spełnia aż do teraz.<br>Dzisiaj — w całości organizowany przez uczniów, a wyczekiwany okrągły rok — poprzez dekoracje i atmosferę na kilka wiosenny dni odmienia mury liceum w (jeszcze bardziej) pełne artystycznej energii i pasji.</p></article>
        </section>

        <!--JS-->
        <script src="<?php echo get_template_directory_uri(); ?>/js/header.nav.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/home/programme.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/home/gallery.js"></script>
        <!--JS - PROGRAMME-->
        <script>
            var programme = JSON.parse('<?php echo str_replace("\n", "", file_get_contents(get_template_directory_uri().'/data/programme.json')); ?>');
            var today_programme = programme[('0' + now.getDate()).slice(-2) + '_' + ('0' + (now.getMonth() + 1)).slice(-2)];

            if(today_programme == undefined)
                $('.programme ul').append('<li>Niestety dzisiaj nie odbywają się żadne spektakle.</li>');

            else {
                for(var i = 0; i < today_programme.length; i++)
                    $('.programme ul').append('<li>' + today_programme[i]['time'] + ' - ' + today_programme[i]['title'] + '<br><span class="author">' + today_programme[i]['author'] + '</span></li>');
            }
        </script>
        <!--JS - NEWS-->
        <script>
            var recent_posts = JSON.parse('<?php echo json_encode($recent_posts); ?>');

            function showPost(postnumber) {
                $('.news article').fadeOut(150);
                $('.news .author').fadeOut(150);

                setTimeout(function() {
                    $('.news article').html(recent_posts[postnumber]['post_content']);
                    $('.news article').fadeIn(150);

                    //$('.news .author').text(recent_posts[postnumber]['author']);
                    //$('.news .author').fadeIn(150);

                    while($('.news article').height() >= 393) {
                        var words = $('.news article').text().split(' ');
                        words.pop();

                        $('.news article').text(Array.prototype.join.call(words, ' ') + '...');
                    }

                    //$('.news .author').css('top', 73 + $('.news article').height() + 18 + 'px');
                }, 150);

                $('.news .dots .dot').each(function() {
                    $(this).removeClass('active');
                });

                $('.news .dots .dot').eq(postnumber).addClass('active');
            }

            var iPosts = 1;

            function intervalFunction() {
                iPosts %= recent_posts.length;

                showPost(iPosts);

                iPosts++;
            }

            for(var i = 0; i < recent_posts.length; i++)
                $('.news .dots').append('<div class="dot" name="post-' + i + '"></div>');

            var interval;
            interval = setInterval(intervalFunction, 15000);

            $('.news .dots .dot').on('click', function() {
                clearInterval(interval);
                interval = setInterval(intervalFunction, 15000);

                iPosts = ($(this).attr('name').split('post-')[1] + 1) % recent_posts.length;

                showPost($(this).attr('name').split('post-')[1]);
            });

            if(recent_posts.length > 0)
                showPost(0);
        </script>
    </body>
</html>