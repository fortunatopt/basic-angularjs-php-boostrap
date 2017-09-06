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
        'Donetta',
        'Hoyt',
        'Walter',
        'Kym',
        'Shani',
        'Jaye',
        'Kyong',
        'Elsy',
        'Noriko',
        'Phyliss',
        'Pat',
        'Frankie',
        'Danica',
        'Kaci',
        'Edwin',
        'Cristie',
        'Consuela',
        'Vincenzo',
        'Grazyna',
        'Mervin',
        'Blossom',
        'Madalyn',
        'Twyla',
        'Earlean',
        'Candie',
        'Reena',
        'Mallie',
        'Loyce',
        'Robbi',
        'Kisha',
        'Kourtney',
        'Luisa',
        'Quyen',
        'Micheal',
        'Brittny',
        'Winfred',
        'Rebbecca',
        'Lien',
        'Orville',
        'Reagan',
        'Gidget',
        'Yolande',
        'Eunice',
        'Alyse',
        'Nona',
        'Kiana',
        'Elvis',
        'Chadwick',
        'Irvin',
        'Benton'
    );

    $lastNames = array(
        'Watts',
        'Myers',
        'Sosa',
        'Shannon',
        'Conley',
        'Mcneil',
        'Khan',
        'Sweeney',
        'Bentley',
        'Huffman',
        'Hines',
        'Hall',
        'Koch',
        'Kelley',
        'Dickson',
        'Marshall',
        'Montes',
        'Zhang',
        'Ward',
        'Walters',
        'Frank',
        'Byrd',
        'Gomez',
        'Abbott',
        'Fletcher',
        'Burton',
        'Holt',
        'Beard',
        'Trujillo',
        'Berry',
        'Thomas',
        'Sutton',
        'Serrano',
        'Reynolds',
        'Wood',
        'Davenport',
        'Colon',
        'Frazier',
        'Lawson',
        'Thompson',
        'Gonzalez',
        'Rosales',
        'Andrade',
        'Tyler',
        'Pittman',
        'Mendez',
        'Dominguez',
        'Stevenson',
        'Young',
        'Frost'
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
