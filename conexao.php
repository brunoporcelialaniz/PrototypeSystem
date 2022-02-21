<?php

$conn_string = "host=localhost port=5432 dbname=car_system user=bruno password=123mudar";
$dbconn = pg_pconnect($conn_string);

return $dbconn;

?>