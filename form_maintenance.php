<?php

$maintenance_mechanil = $_POST['maintenance_mechanil'];
$maintenance_date_input = $_POST['maintenance_date_input'];
$maintenance_date_exit = $_POST['maintenance_date_exit'];
$fk_maintenance_employee = $_POST['fk_maintenance_employee'];
$fk_maintenance_vehicle = $_POST['fk_maintenance_vehicle']; 
$fk_maintenance_company = $_POST['fk_maintenance_company'];
$maintenance_observation = $_POST['maintenance_observation'];

$conn_string = "host=localhost port=5432 dbname=car_system user=bruno password=123mudar";
$dbconn = pg_pconnect($conn_string);

$query = "INSERT INTO public.maintenance(maintenance_mechanil, maintenance_date_input, maintenance_date_exit, fk_maintenance_employee, fk_maintenance_vehicle, fk_maintenance_company, maintenance_observation) VALUES ('$maintenance_mechanil', '$maintenance_date_input', '$maintenance_date_exit', '$fk_maintenance_employee', '$fk_maintenance_vehicle', '$fk_maintenance_company', '$maintenance_observation');";

pg_query($dbconn, $query);

pg_close($dbconn);

?>