$(document).ready(function(){
    $('tr:odd').addClass('odd');
    $('tr:even').addClass('even');

    $('.customer').hoverIntent(function(){
            $(this).find('.crud').fadeIn();
        }, function(){
            $(this).find('.crud').fadeOut();
        }
    );
});