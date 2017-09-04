<?php

include '../config.php';
include '../db_functions.php';
include '../queries.php';

$sql = createInsertQuery(10);
echo execute($sql, $servername, $username, $password, $dbname);

?>