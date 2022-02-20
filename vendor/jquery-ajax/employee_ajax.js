$(document).ready(function(){
    $(".submit").click(function(){
        $.ajax({
            url: '/form_employee.php',
            type: 'POST',
            data: {
                fist_name: $('input[name=fist_name]').val(),
                last_name: $('input[name=last_name]').val(),
                education: $('select[name=education] option:selected').val(),
                cpf: $('input[name=cpf]').val(),
                rg: $('input[name=rg]').val(),
                working_hours: $('input[name=working_hours]').val(),
                admission_date: $('input[name=admission_date]').val(),
                cnh_number: $('input[name=cnh_number]').val(),
                cnh_date: $('input[name=cnh_date]').val(),
                employee_observation: $('textarea[name=employee_observation]').val(),
                public_place: $('input[name=public_place]').val(),
                number: $('input[name=number]').val(),
                district: $('input[name=district]').val(),
                cep: $('input[name=cep]').val()
            },
            success: function(msg) {
                alert('Salvo com sucesso!!!');
                window.location.reload();
            }               
        });
    });
});