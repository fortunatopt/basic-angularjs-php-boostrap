<?php

include '../config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "</br>");
}

// sql to create table
$sql = "DROP TABLE ".$tblName;

if ($conn->query($sql) === TRUE) {
    echo "Table ".$tblName." created successfully<br>";
} else {
    echo "Error creating table ".$tblName.": " . $conn->error . "</br>";
}

$conn->close();

?>