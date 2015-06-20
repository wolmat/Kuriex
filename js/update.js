$(document).ready(function(){
    var url = window.location.pathname.split("/");
    var controller = url[2].substring(0, url[2].length - 1);
    
    $('.edit').on('click', function(){
        var row = $(this).parent().parent();
        var cells = $(row).find('td').not(':last');
        $(cells).each(function(index){
            var input = $('thead td:nth-child(' + (index + 1) + ') input').clone();
            input.val($(this).text());
            $(this).html(input);
        });

        $(".customer").unbind("mouseenter").unbind("mouseleave");
        $(".customer").removeProp('hoverIntent_t');
        $(".customer").removeProp('hoverIntent_s');
        
        $(this).parent().find(".edit, .delete").fadeOut();
        $(this).parent().find(".update").fadeIn();

        return false;
    });

    $('.delete').on('click', function(){
        var tr = $(this).parent().parent();
        var data = {
            delete: tr.find('td:first-child').text()
        };
        if(controller == 'worker'){
            data['function'] = $('[name="function"]').val();
        }
        $.ajax({
            url: 'index.php?task=' + controller + '&action=delete',
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
        return false;
    });

    $('.update').on('click', function(){    
        $('.customer, .order, .worker').hoverIntent(function(){
                $(this).find('.crud').fadeIn();
            }, function(){
                $(this).find('.crud').fadeOut();
            }
        );
        return false;
    });

    $('.add').on('click', function(event){
        var $form = $('form');
        var $inputs = $form.find("input, select, button, textarea");
        var data = $form.serialize();
        $inputs.prop("disabled", true);
        $.ajax({ 
            url: 'index.php?task=' + controller + '&action=add',
            type: 'post',
            data: data,
            success: function(result){
                console.log(result);
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
                    var row = '<tr class="new">';
                    $('input[type="text"]').each(function(){
                        row += '<td>' + $(this).val() + '</td>';
                    });
                    row += '</tr>'
                    $('.new').hide();
                    $('thead').after(row);
                    $(':text').trigger('keyup');
                }
            },
        });
        $inputs.prop("disabled", false);
        return false;
    });
});