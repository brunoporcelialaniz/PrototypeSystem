$(document).ready(function(){
    $(".submit").click(function(){
        $.ajax({
            url: '/form_company.php',
            type: 'POST',
            data: {
                name: $('input[name=name]').val(),
                cnpj: $('input[name=cnpj]').val(),
                activity: $('select[name=activity] option:selected').val(),
                observation: $('textarea[name=observation]').val(),
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