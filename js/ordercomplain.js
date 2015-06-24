$(document).ready(function(){
    $('.acceptOrder').on('click', function(){
        var tr = $(this).parent().parent();
        var data = {
            id_zlecenia: tr.find('td:first-child').text()
        };
        
        $.ajax({
            url: 'index.php?task=order&action=acceptOrder',
            type: 'post',
            data: data,
            success: function(result){
                var message = $('.message');
                if(!$(message).length){
                    message = $(result).find('.message');
                    $(message).hide();
                    $('h3').after(message);
                } else {
                    $(message).hide().replaceWith($(result).find('.message'));
                }
                $(message).fadeIn();
                if($(message).hasClass('info')){
                    tr.fadeOut();
                }
            }
        });
    });
    
    $('.acceptComplain').on('click', function(){
        var tr = $(this).parent().parent();
        var data = {
            id_reklamacji: tr.find('td:first-child').text()
        };
        
        $.ajax({
            url: 'index.php?task=order&action=acceptComplain',
            type: 'post',
            data: data,
            success: function(result){
                var message = $('.message');
                if(!$(message).length){
                    message = $(result).find('.message');
                    $(message).hide();
                    $('h3').after(message);
                } else {
                    $(message).hide().replaceWith($(result).find('.message'));
                }
                $(message).fadeIn();
                if($(message).hasClass('info')){
                    tr.fadeOut();
                }
            }
        });
    });
});