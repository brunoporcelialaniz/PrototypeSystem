<?php

$vehicle_model = $_POST['vehicle_model'];
$vehicle_brand = $_POST['vehicle_brand'];
$vehicle_color = $_POST['vehicle_color'];
$vehicle_kilometer = $_POST['vehicle_kilometer'];
$vehicle_fuel = $_POST['vehicle_fuel'];
$vehicle_model_year = $_POST['vehicle_model_year'];
$vehicle_year_manufacture = $_POST['vehicle_year_manufacture'];
$vehicle_license_plate = $_POST['vehicle_license_plate'];
$vehicle_doors = $_POST['vehicle_doors'];
$vehicle_streaming = $_POST['vehicle_streaming'];
$vehicle_tire_rim = $_POST['vehicle_tire_rim'];
$vehicle_tire_brand = $_POST['vehicle_tire_brand'];
$vehicle_lamps = $_POST['vehicle_lamps'];
$vehicle_observation = $_POST['vehicle_observation'];
$public_place_car = $_POST['public_place_car'];
$number_car = $_POST['number_car'];
$district_car = $_POST['district_car'];
$cep_car = $_POST['cep_car'];

$conn_string = "host=localhost port=5432 dbname=car_system user=bruno password=123mudar";
$dbconn = pg_pconnect($conn_string);

$query = "WITH vehicle_key AS
(INSERT INTO vehicle (vehicle_model, vehicle_brand, vehicle_color, vehicle_kilometer, vehicle_fuel, vehicle_streaming, vehicle_tire_rim, vehicle_tire_brand, vehicle_lamps, vehicle_observation, vehicle_model_year, vehicle_year_manufacture, vehicle_license_plate, vehicle_doors) 
VALUES ('$vehicle_model', '$vehicle_brand', '$vehicle_color', '$vehicle_kilometer', '$vehicle_fuel', '$vehicle_streaming', '$vehicle_tire_rim', '$vehicle_tire_brand', '$vehicle_lamps', '$vehicle_observation', '$vehicle_model_year', '$vehicle_year_manufacture', '$vehicle_license_plate', '$vehicle_doors') RETURNING pk_vehicle)
INSERT INTO address_on (address_public_place, address_number, address_district, address_cep, fk_address_vehicle)
SELECT '$public_place_car', '$number_car', '$district_car', '$cep_car', vehicle_key.pk_vehicle FROM vehicle_key;";

pg_query($dbconn, $query);

pg_close($dbconn);

?>