<?php

$dbConfig = new DBConfig();

$createDatabaseTest = "CREATE DATABASE ".$dbConfig->dbname;

$createTablePerson = "CREATE TABLE Person 
    (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
    firstname VARCHAR(30) NOT NULL, 
    lastname VARCHAR(30) NOT NULL, 
    email VARCHAR(50), 
    reg_date TIMESTAMP)";

$dropDatabaseTest = "DROP DATABASE ".$dbConfig->dbname;

$deleteRecordsPerson = "DELETE FROM Person";

$selectFromPerson = "SELECT * FROM Person";

function createInsertQuery($total)
{
    $firstNames = array(
        'Fred',
        'John',
        'Alex',
        'Kirk'
    );
    
    $lastNames = array(
        'Flintsone',
        'Rubble',
        'Johnson',
        'Jones'
    );
    
    $fCount = count($firstNames);
    $lCount = count($lastNames);
    
    $insertRecordsPerson = "INSERT INTO PERSON (firstname, lastname, email) VALUES ";
    
    for ($j = 0; $j < $total; $j++) {
        $first = $firstNames[rand(0, $fCount - 1)];
        $last = $lastNames[rand(0, $lCount - 1)];
        $insertRecordsPerson .= "('" . $first . "', '" . $last . "', '" . $first . "." . $last . "@example.com'),";
    }
    $insertRecordsPerson = substr($insertRecordsPerson, 0, -1);
    return $insertRecordsPerson;
}



?>
