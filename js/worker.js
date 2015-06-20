$(document).ready(function(){
    $('[name="function"]').on('change',
        function(){
            var data = {
                'function': $(this).val()
            };
            $.ajax({
                url: 'index.php?task=worker&action=show',
                type: 'post',
                data: data,
                beforeSend: function() {
                    $('.message').remove();
                    $('h3').after($('<div class="message info">Wczytywanie...</div>'));
                },
                complete: function() {
                    $('.message').remove();
                },
                success: function(result){
                    var table = $(result).find('table');
                    $('table').fadeOut();
                    $('table').replaceWith(table);
                    $(table).fadeIn();
                    $('.worker').hoverIntent(function(){
                            $(this).find('.crud').fadeIn();
                        }, function(){
                            $(this).find('.crud').fadeOut();
                        }
                    );
                }
            });
        }
    );
});