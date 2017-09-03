<?php

include '../config.php';
include '../db_functions.php';
include '../queries.php';

echo execute($dropDatabaseTest, $servername, $username, $password, $dbname);

?>