$('header nav a').hover(function() {
    var text = $(this).attr('data-anchor');

    $(this).attr('data-anchor', $(this).text());
    $(this).text(text);
});