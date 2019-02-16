var index = 1;

$('.gallery .photo').each(function() {
    $('.gallery .dots').append('<div class="dot" name="photo-' + index + '">');

    index++;
});

function showPhoto(photonumber) {
    $('.gallery .dots .dot').each(function() {
        $(this).removeClass('active');
    });

    $('.gallery .dots .dot').eq(photonumber - 1).addClass('active');
}