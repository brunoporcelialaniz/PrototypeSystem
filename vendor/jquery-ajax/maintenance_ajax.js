$(document).ready(function(){
    $(".submit").click(function(){
        $.ajax({
            url: '/form_maintenance.php',
            type: 'POST',
            data: {
                maintenance_mechanil: $('select[name=maintenance_mechanil] option:selected').val(),
                maintenance_date_input: $('input[name=maintenance_date_input]').val(),
                maintenance_date_exit: $('input[name=maintenance_date_exit]').val(),
                fk_maintenance_employee: $('select[name=fk_maintenance_employee] option:selected').val(),
                fk_maintenance_vehicle: $('select[name=fk_maintenance_vehicle] option:selected').val(), 
                fk_maintenance_company: $('select[name=fk_maintenance_company] option:selected').val(),
                maintenance_observation: $('textarea[name=maintenance_observation]').val()
            },
            success: function(msg) {
                alert('Salvo com sucesso!!!');
                window.location.reload();
            }               
        });
    });
}); 