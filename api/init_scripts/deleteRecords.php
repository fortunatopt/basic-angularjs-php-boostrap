<?php

include '../config.php';
include '../db_functions.php';
include '../queries.php';

echo execute($deleteRecordsPerson, $servername, $username, $password, $dbname);

?>