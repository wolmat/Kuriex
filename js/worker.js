$(document).ready(function(){
    $('[name="function"]').on('change',
        function(){
            console.log($(this).val());
            var data = {
                'function': $(this).val()
            };
            $.ajax({
                url: 'index.php?task=worker&action=show',
                type: 'post',
                data: data,
                success: function(result){
                    var table = $(result).find('table');
                    $('table').fadeOut();
                    $('table').replaceWith(table);
                    $(table).fadeIn();
                }
            });
        }
    );
});