<?php

include 'config.php';

$createDatabaseTest = "CREATE DATABASE ".$dbname;

$createTablePerson = "CREATE TABLE Person 
    (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,  
    firstname VARCHAR(30) NOT NULL, 
    lastname VARCHAR(30) NOT NULL, 
    email VARCHAR(50), 
    reg_date TIMESTAMP)";

$insertRecordsPerson = "INSERT INTO PERSON 
    (firstname, lastname, email) VALUES 
    ('John', 'Flintsone', 'jf@example.com'),
    ('Fred', 'Rubble', 'fr@example.com'),
    ('Alex', 'Johnson', 'aj@example.com'),
    ('Herb', 'Jones', 'hj@example.com')";

$dropDatabaseTest = "DROP DATABASE ".$dbname;

$deleteRecordsPerson = "DELETE FROM Person";

$selectFromPerson = "SELECT * FROM Person";

?>