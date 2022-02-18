<?php

$name = $_POST['name'];
$cnpj = $_POST['cnpj'];
$mechanil = $_POST['mechanil'];
$electrical = $_POST['electrical'];
$painting = $_POST['painting'];
$tapestry = $_POST['tapestry'];
$tire = $_POST['tire'];
$vehicle = $_POST['vehicle'];
$gas_station = $_POST['gas_station'];
$observation = $_POST['observation'];
$public_place = $_POST['public_place'];
$number = $_POST['number'];
$district = $_POST['district'];
$cep = $_POST['cep'];

$conn_string = "host=localhost port=5432 dbname=car_system user=bruno password=123mudar";
$dbconn = pg_connect($conn_string);

$query = "WITH company_key AS
(INSERT INTO company (company_name, company_cnpj, company_mechanil, company_electrical, company_painting, company_tapestry, company_tire, company_vehicle, company_gas_station, company_observation) 
VALUES ('$name', '$cnpj', '$mechanil', '$electrical', '$painting', '$tapestry', '$tire', '$vehicle', '$gas_station', '$observation') RETURNING pk_company)
INSERT INTO address_on (address_public_place, address_number, address_district, address_cep, fk_address_company)
SELECT '$public_place', '$number', '$district', '$cep', company_key.pk_company
FROM company_key;";

pg_query($dbconn, $query);

pg_close($dbconn);

?>