$(document).ready(function(){
    $(".submit").click(function(){
        $.ajax({
            url: 'https://localhost/PrototypeSystem/form_company.php',
            type: 'POST',
            data: {
                name: $('input[name=name]').val(),
                cnpj: $('input[name=cnpj]').val(),
                mechanil: $('input[name=mechanil]').val(),
                electrical: $('input[name=electrical]').val(),
                painting: $('input[name=painting]').val(),
                tapestry: $('input[name=tapestry]').val(),
                tire: $('input[name=tire]').val(),
                vehicle: $('input[name=vehicle]').val(),
                gas_station: $('input[name=gas_station]').val(),
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