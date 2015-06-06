$(document).ready(function(){
    $('.order').on('click', function(){
        var packages = $(this).next('.package-tr');
        var other = $('.package-tr:visible').not($(packages));
        if($(packages).is(':visible'))
            $(packages).fadeOut();
        else {
            $(packages).fadeIn();
            $(other).fadeOut();
        }
    });
});