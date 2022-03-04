$(document).ready(function(){
    $(".send_report").click(function(){
        $.ajax({
            url: '/report.php',
            type: 'POST',
            data: {
                date_start: $('input[name=date_start]').val(),
                date_end: $('input[name=date_end]').val()
            }             
        });
    });
}); 