$(document).ready(function(){
    $('.edit').on('click', function(){
        var row = $(this).parent().parent();
        var cells = $(row).find('td').not(':last');
        $(cells).each(function(index){
            var input = $('thead td:nth-child(' + (index + 1) + ') input').clone();
            input.val($(this).text());
            $(this).html(input);
        });

        return false;
    });

    $('.update').on('click', function(){

    });

    $('#customers').submit(function(event){
        var $form = $(this);
        var $inputs = $form.find("input, select, button, textarea");
        var serializedData = $form.serialize() + '&add=1';
        $inputs.prop("disabled", true);
        $.ajax({ 
            url: 'customers',
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