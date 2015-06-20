$(document).ready(function(){
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

        return false;
    });

    $('.delete').on('click', function(){
        var tr = $(this).parent().parent();
        var data = {
            delete: tr.find('td:first-child').text()
        };
        $.ajax({
            url: 'index.php?task=customer&action=delete',
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
        return false;
    });

    $('.add').click(function(event){
        var $form = $('form');
        var $inputs = $form.find("input, select, button, textarea");
        var serializedData = $form.serialize();
        $inputs.prop("disabled", true);
        console.log(serializedData);
        $.ajax({ 
            url: 'index.php?task=customer&action=add',
            type: 'post',
            data: serializedData,
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
                    var row = '<tr class="new">';
                    $('input[type="text"]').each(function(){
                        row += '<td>' + $(this).val() + '</td>';
                    });
                    row += '</tr>'
                    $('.new').hide();
                    $('thead').after(row);
                    $(':text').trigger('keyup');
                }
            }
        });
        $inputs.prop("disabled", false);
        return false;
    });
});