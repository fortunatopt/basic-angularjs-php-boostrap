<?php

include '../config.php';
include '../db_functions.php';
include '../queries.php';

echo dropDB($dropDatabaseTest, $dbname, $servername, $username, $password);

?>