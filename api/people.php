<?php

error_reporting(0);
mysqli_report(MYSQLI_REPORT_STRICT);

include 'config.php';
include 'db_functions.php';
include 'queries.php';

echo selectData($selectFromPerson, $servername, $username, $password, $dbname);

?>