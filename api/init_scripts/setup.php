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

echo $dbFunctions->create($createDatabaseTest, $servername, $username, $password);
echo "</br>";
echo $dbFunctions->execute($createTablePerson, $servername, $username, $password, $dbname);
echo "</br>";
$sql = createInsertQuery(10);
echo $dbFunctions->execute($sql, $servername, $username, $password, $dbname);

?>