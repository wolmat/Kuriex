$(document).ready(function(){
    $('tr:odd').addClass('odd');
    $('tr:even').addClass('even');

    $('.customer').on({
        mouseenter: function(){
            $(this).find('.crud').fadeIn();
        },
        mouseleave: function(){
            $(this).find('.crud').fadeOut();
        }
    });
});