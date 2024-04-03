$(window).scroll(function() {
    if ($(this).scrollTop() > 1600)  {
        $('.slideup').fadeIn();
    } else {
        $('.slideup').fadeOut();
    }
});