<?php

include '../config.php';
include '../db_functions.php';
include '../queries.php';

echo deleteData($deleteRecordsPerson, $servername, $username, $password, $dbname);

?>