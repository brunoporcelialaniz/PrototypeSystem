<?php

// $name = strval($_POST['name']);
// $cnpj = var_dump((int) ($_POST['cnpj']));
// $activity = strval($_POST['activity']);
// $observation = strval($_POST['observation']);
// $public_place = strval($_POST['public_place']);
// $number = var_dump((int) ($_POST['number']));
// $district = strval($_POST['district']);
// $cep = var_dump((int) ($_POST['cep']));

$name = 'name';
$cnpj = '854123';
$activity = 'activity';
$observation = 'observation';
$public_place = 'public_place';
$number = '7584';
$district = 'district';
$cep = '74585';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$db = new PDO('pgsql:dbname=car_system host=localhost', 'bruno', '123mudar');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->beginTransaction();
$stmt = $db->prepare("SELECT * FROM company ");

//$conn_string = "host=localhost port=5432 dbname=car_system user=bruno password=123mudar";
//$dbconn = pg_pconnect($conn_string);

$query = "WITH company_key AS
(INSERT INTO company (company_name, company_cnpj, company_observation, company_activity) VALUES ('$name', '$cnpj', '$observation', '$activity') RETURNING pk_company)
INSERT INTO address_on (address_public_place, address_number, address_district, address_cep, fk_address_company)
SELECT '$public_place', '$number', '$district', '$cep', company_key.pk_company FROM company_key;";

pg_query($dbconn, $query);

pg_close($dbconn);



?>