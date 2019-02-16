function onResize() {
    for(var i = 0; i < 2; i++) {
        var columns;
        var width = $(window).width();
        var height = $(window).height();

        if(width >= 1920)
            columns = 5;

        else if(width >= 1540)
            columns = 4;

        else if(width >= 1120)
            columns = 3;

        else
            columns = 2;

        $('.programme').width(width / columns);

        /*$('.programme').each(function() {
            var index = $(this).attr('name').split('programme-')[1];
            
            $(this).css('top', Math.floor(index / columns) * $(this).height() + 100);

            console.log(Math.floor(index / columns) * $(this).height() + 100);

            if(columns == 2) {
                if(index % columns == 0)
                    $(this).css('left', 0);

                else if(index % columns == 1)
                    $(this).css('left', $(this).width());
            }

            else if(columns == 3) {
                if(index % columns == 0)
                    $(this).css('left', 0);
                
                else if(index % columns == 1)
                    $(this).css('left', $(this).width());

                else if(index % columns == 2)
                    $(this).css('right', 0);
            }

            else if(columns == 4) {
                if(index % columns == 0)
                    $(this).css('left', 0);
                
                else if(index % columns == 1)
                    $(this).css('left', $(this).width());

                else if(index % columns == 2)
                    $(this).css('right', $(this).width());

                else if(index % columns == 3)
                    $(this).css('right', 0);
            }
        });*/
    }
}

onResize();

$(window).on('resize', function() {
    onResize();
});