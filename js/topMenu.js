$(window).bind("scroll", function() {
    if ($(this).scrollTop() > 300) {
        $("header").fadeIn();
    } else {
        $("header").stop().fadeOut();
    }
});