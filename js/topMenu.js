$(window).bind("scroll", function() {
    if ($(this).scrollTop() > 150) {
        $("#top-nav").fadeIn();
    } else {
        $("#top-nav").stop().fadeOut();
    }
});