$(document).ready(function(){
    $(".submit").click(function(){
        $.ajax({
            url: '/form_company.php',
            type: 'POST',
            data: {
                vehicle_model: $('input[name=vehicle_model]').val(),
                vehicle_brand: $('input[name=vehicle_brand]').val(),
                vehicle_color: $('input[name=vehicle_color]').val(),
                vehicle_kilometer: $('input[name=vehicle_kilometer]').val(),
                vehicle_fuel: $('select[name=vehicle_fuel] option:selected').val(),
                vehicle_model_year: $('input[name=vehicle_model_year]').val(),
                vehicle_year_manufacture: $('input[name=vehicle_year_manufacture]').val(),
                vehicle_license_plate: $('input[name=vehicle_license_plate]').val(),
                vehicle_doors: $('select[name=vehicle_doors] option:selected').val(),
                vehicle_streaming: $('select[name=vehicle_streaming] option:selected').val(),
                vehicle_tire_rim: $('select[name=vehicle_tire_rim] option:selected').val(),
                vehicle_tire_brand: $('select[name=vehicle_tire_brand] option:selected').val(),
                vehicle_lamps: $('select[name=vehicle_lamps] option:selected').val(),
                vehicle_observation: $('input[name=vehicle_observation]').val(),
                public_place_car: $('input[name=public_place_car]').val(),
                number_car: $('input[name=number_car]').val(),
                district_car: $('input[name=district_car]').val(),
                cep_car: $('input[name=cep_car]').val()
            },
            success: function(msg) {
                alert('success');
            }               
        });
    });
}); 