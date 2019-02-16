<?php /* Template Name: Programme */ ?>
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

        <!--JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="XXX FT" class="logo">
            <nav>
                <a href="<?php echo get_home_url(); ?>" data-anchor="/ strona główna /" >/ sg /</a>
                <a href="#" data-anchor="/ forum /">/ fo /</a>
                <a href="<?php echo get_home_url(); ?>/index.php/programme/" data-anchor="/ harmonogram /">/ ha /</a>
                <a href="#" data-anchor="/ o festiwalu /">/ of /</a>
                <a href="#" data-anchor="/ sponsorzy /">/ sp /</a>
                <a href="#" data-anchor="/ kontakt /">/ ko /</a>
            </nav>
        </header>

        <!--JS-->
        <!--JS - PROGRAMME-->
        <script>
            var programme = JSON.parse('<?php echo str_replace("\n", "", file_get_contents(get_template_directory_uri().'/data/programme.json')); ?>');
            var index = 0;

            for(var key in programme) {
                var day = new Date(2019, key.split('_')[1] - 1, key.split('_')[0] - 0 + 1);
                var day_prog = programme[key];
                var day_oftw = ['niedzielę', 'poniedziałek', 'wtorek', 'środę', 'czwartek', 'piątek', 'sobotę'];

                var html = '<section class="programme" name="programme-' + index + '"><p class="title">Repertuar na <span class="date">' + day_oftw[day.getDay()] + ', ' + ('0' + day.getDate()).slice(-2) + '.' + ('0' + (day.getMonth() + 1)).slice(-2) + '</span>:</p><ul>'

                for(var i = 0; i < day_prog.length; i++)
                    html += '<li>' + day_prog[i]['time'] + ' - ' + day_prog[i]['title'] + '<br><span class="author">' + day_prog[i]['author'] + '</span></li>';

                html += '</ul></section>';

                $('body').append(html);

                index++;
            }
        </script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/header.nav.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/programme/programme.js"></script>
    </body>
</html>