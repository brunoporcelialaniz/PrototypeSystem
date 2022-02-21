$(document).ready(function(){
    $(".submit").click(function(){
        $.ajax({
            url: '/form_distance.php',
            type: 'POST',
            data: {
                distance_value: $('input[name=distance_value]').val(),
                distance_number: $('input[name=distance_number]').val(),
                distance_input: $('input[name=distance_input]').val(),
                distance_exit: $('input[name=distance_exit]').val(),
                distance_date_input: $('input[name=distance_date_input]').val(),
                distance_date_exit: $('input[name=distance_date_exit]').val(),
                fk_distance_employee: $('select[name=fk_distance_employee] option:selected').val(),
                fk_distance_vehicle: $('select[name=fk_distance_vehicle] option:selected').val(), 
                fk_distance_company: $('select[name=fk_distance_company] option:selected').val(),
                distance_observation: $('textarea[name=distance_observation]').val()
            },
            success: function(msg) {
                alert('Salvo com sucesso!!!');
                window.location.reload();
            }               
        });
    });
});