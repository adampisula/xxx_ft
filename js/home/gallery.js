var index = 1;

$('.gallery .photo').each(function() {
    $('.gallery .dots').append('<div class="dot" name="photo-' + index + '">');

    index++;
});

var photos_count = index - 1;

function showPhoto(photonumber) {
    $('.gallery .dots .dot').each(function() {
        $(this).removeClass('active');
    });

    $('.gallery .dots .dot').eq(photonumber - 1).addClass('active');

    $('.gallery .photo').eq(photonumber - 1).fadeIn(400, function() {
        $('.gallery .photo').not($(this)).each(function() {
            $(this).fadeOut();
        });
    });
}

var iPhotos = 1;

function intervalFunctionPhotos() {
    iPhotos %= photos_count;

    showPhoto(iPhotos);

    iPhotos++;
}

var intervalPhotos;
intervalPhotos = setInterval(intervalFunctionPhotos, 15000);

$('.gallery .dots .dot').on('click', function() {
    clearInterval(intervalPhotos);
    intervalPhotos = setInterval(intervalFunctionPhotos, 15000);

    showPhoto($(this).attr('name').split('-')[1]);
});

showPhoto(1);