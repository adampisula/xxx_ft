function onResize() {
    for(var i = 0; i < 2; i++) {
        var columns = 1;
        var width = $(window).width();

        if(width >= 1920)
            columns = 5;

        else if(width >= 1540)
            columns = 4;

        else if(width >= 1120)
            columns = 3;

        else if (width >= 750)
            columns = 2;

        $('.programme').width(width / columns);
    }
}

onResize();

$(window).on('resize', function() {
    onResize();
});