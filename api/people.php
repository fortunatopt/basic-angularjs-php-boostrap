<?php

error_reporting(0);
mysqli_report(MYSQLI_REPORT_STRICT);

include 'config.php';
include 'db_functions.php';
include 'queries.php';

$dbConfig = new DBConfig();
$dbFunctions = new DBFunctions();

$servername = $dbConfig->servername;
$username = $dbConfig->username;
$password = $dbConfig->password;
$dbname = $dbConfig->dbname;

echo $dbFunctions->read($selectFromPerson, $servername, $username, $password, $dbname);

?>