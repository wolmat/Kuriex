$(document).ready(function() {
    $(':text').on('keyup', function() {
        var full = $(':text').filter(function() {
            return $(this).val() != '';
        });
        var count = 0;
        $('.customer-table tbody tr').each(function() {
            var tr = $(this);
            var show = true;
            $(full).each(function() {
                var index = $(this).parent().index() + 1;
                var val = $(this).val();
                var td = $(tr).find('td:nth-child(' + index + ')');
                if(val != '' && !$(td).text().startsWith(val))
                   show = false;
            });
            if(show) {
                $(this).fadeIn('slow');
                ++count;
            } else
                $(this).fadeOut('slow');
        });
        $('#count').text(count);
    });
});