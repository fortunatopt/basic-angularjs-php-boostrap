<?php

include '../config.php';
include '../db_functions.php';
include '../queries.php';

echo create($createDatabaseTest, $servername, $username, $password);
echo "</br>";
echo execute($createTablePerson, $servername, $username, $password, $dbname);
echo "</br>";
$sql = createInsertQuery(10);
echo execute($sql, $servername, $username, $password, $dbname);

?>