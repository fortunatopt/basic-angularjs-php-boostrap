<?php

include '../config.php';
include '../db_functions.php';
include '../queries.php';

echo insertData($insertRecordsPerson, $servername, $username, $password, $dbname);

?>