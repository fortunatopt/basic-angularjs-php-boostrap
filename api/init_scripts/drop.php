<?php

include '../config.php';
include '../db_functions.php';
include '../queries.php';

$dbConfig = new DBConfig();
$dbFunctions = new DBFunctions();

echo $dbFunctions->execute($dropDatabaseTest, $dbConfig->servername, $dbConfig->username, $dbConfig->password, $dbConfig->dbname);

?>