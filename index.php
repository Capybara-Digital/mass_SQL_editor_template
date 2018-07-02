<?php

//@todo Ошибки писать в логи
error_reporting(1);
error_reporting(E_ALL);
require_once 'core.php';


$database = new MySQL($dbSettings);

$result = $database->complexQuery(486, 3);

?>
