<?php

include '../config.php';

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "</br>");
} 

// Create database
$sql = "CREATE DATABASE ".$dbname;
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully</br>";
} else {
    echo "Error creating database: " . $conn->error . "</br>";
}

$conn->close();

?>