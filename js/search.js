$(document).ready(function() {
    $(':text').on('keyup', function() {
        var full = $(':text').filter(function() {
            return $(this).val() != '';
        });
        var count = 0;
        var found = $('.customer, .worker, .order').filter(function() {
            var tr = $(this);
            var show = true;
            $(full).each(function() {
                var index = $(this).parent().index() + 1;
                var val = $(this).val();
                var td = $(tr).find('td:nth-child(' + index + ')');
                if(val != '' && !$(td).text().startsWith(val)){
                    show = false;
                    return;
                }
            });
            return show;
        });
        $(found).fadeIn();
        $('.customer, .worker, .order').not($(found)).fadeOut();
        $('#count').text($(found).length);
    });
});