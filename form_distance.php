<?php

$distance_value = $_POST['distance_value'];
$distance_number = $_POST['distance_number'];
$distance_input = $_POST['distance_input'];
$distance_exit = $_POST['distance_exit'];
$distance_date_input = $_POST['distance_date_input'];
$distance_date_exit = $_POST['distance_date_exit'];
$fk_distance_employee = $_POST['fk_distance_employee'];
$fk_distance_vehicle = $_POST['fk_distance_vehicle']; 
$fk_distance_company = $_POST['fk_distance_company'];
$distance_observation = $_POST['distance_observation'];

$conn_string = "host=localhost port=5432 dbname=car_system user=bruno password=123mudar";
$dbconn = pg_pconnect($conn_string);

$query = "INSERT INTO public.distance(
distance_value, distance_number, distance_input, distance_exit, distance_date_input, distance_date_exit, fk_distance_employee, fk_distance_vehicle, fk_distance_company, distance_observation)
VALUES ('$distance_value', '$distance_number', '$distance_input', '$distance_exit', '$distance_date_input', '$distance_date_exit', '$fk_distance_employee', '$fk_distance_vehicle', '$fk_distance_company', '$distance_observation');";

pg_query($dbconn, $query);

pg_close($dbconn);

?>