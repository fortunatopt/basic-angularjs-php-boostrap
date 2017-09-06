<?php

include '../config.php';
include '../db_functions.php';
include '../queries.php';

$dbConfig = new DBConfig();
$dbFunctions = new DBFunctions();

$servername = $dbConfig->servername;
$username = $dbConfig->username;
$password = $dbConfig->password;
$dbname = $dbConfig->dbname;

echo $dbFunctions->execute($deleteRecordsPerson, $servername, $username, $password, $dbname);

?>