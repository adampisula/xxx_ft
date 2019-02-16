var now = new Date();

$('.programme .title .date').text(('0' + now.getDate()).slice(-2) + '.' + ('0' + (now.getMonth() + 1)).slice(-2));