while($('.news article').height() >= 343) {
    var words = $('.news article').text().split(' ');
    words.pop();

    $('.news article').text(Array.prototype.join.call(words, ' ') + '...');
}

$('.news .author').css('top', 73 + $('.news article').height() + 18 + 'px');