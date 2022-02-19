<?php

$name = $_POST['name'];
$cnpj = $_POST['cnpj'];
$activity = $_POST['activity'];
$observation = $_POST['observation'];
$public_place = $_POST['public_place'];
$number = $_POST['number'];
$district = $_POST['district'];
$cep = $_POST['cep'];

$conn_string = "host=localhost port=5432 dbname=car_system user=bruno password=123mudar";
$dbconn = pg_connect($conn_string) or die('Could not connect:' . preg_last_error());

$query = "WITH company_key AS
(INSERT INTO company (company_name, company_cnpj, company_activity, company_observation) 
VALUES ($name, $cnpj, $observation, $activity) RETURNING pk_company)
INSERT INTO address_on (address_public_place, address_number, address_district, address_cep, fk_address_company)
SELECT $public_place, $number, $district, $cep, company_key.pk_company
FROM company_key;";

pg_query($dbconn, $query);

pg_close($dbconn);

?>