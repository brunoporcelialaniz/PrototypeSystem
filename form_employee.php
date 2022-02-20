<?php

$fist_name = $_POST['fist_name'];
$last_name = $_POST['last_name'];
$education = $_POST['education'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$working_hours = $_POST['working_hours'] .= ' hours';
$admission_date = $_POST['admission_date'];
$cnh_number = $_POST['cnh_number'];
$cnh_date = $_POST['cnh_date'];
$employee_observation = $_POST['employee_observation'];
$public_place = $_POST['public_place'];
$number = $_POST['number'];
$district = $_POST['district'];
$cep = $_POST['cep'];

$conn_string = "host=localhost port=5432 dbname=car_system user=bruno password=123mudar";
$dbconn = pg_pconnect($conn_string);

$query = "WITH employee_key AS
(INSERT INTO employee (employee_fist_name, employee_last_name, employee_education, employee_cpf, employee_rg, employee_working_hours, employee_admission_date, employee_cnh_number, employee_cnh_date, employee_observation) 
VALUES ('$fist_name', '$last_name', '$education', '$cpf', '$rg', '$working_hours', '$admission_date', '$cnh_number', '$cnh_date', '$employee_observation') RETURNING pk_employee)
INSERT INTO address_on (address_public_place, address_number, address_district, address_cep, fk_address_employee)
SELECT '$public_place', '$number', '$district', '$cep', employee_key.pk_employee FROM employee_key;";

pg_query($dbconn, $query);

pg_close($dbconn);

?>