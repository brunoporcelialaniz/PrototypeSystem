$(document).ready(function(){
    $(".submit").click(function(){
        $.ajax({
            url: 'https://localhost/PrototypeSystem/form_company.php',
            type: 'POST',
            data: {
                name: $('input[name=name]').val(),
                cnpj: $('input[name=cnpj]').val(),
                activity: $('select[name=activity]').val(),
                observation: $('input[name=observation]').val(),
                public_place: $('input[name=public_place]').val(),
                number: $('input[name=number]').val(),
                district: $('input[name=district]').val(),
                cep: $('input[name=cep]').val()
            },
            success: function(msg) {
                alert('success');
            }               
        });
    });
});