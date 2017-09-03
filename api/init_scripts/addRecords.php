<?php

include '../config.php';
include '../db_functions.php';
include '../queries.php';

echo execute($insertRecordsPerson, $servername, $username, $password, $dbname);

?>