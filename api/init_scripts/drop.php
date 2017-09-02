<?php

include '../config.php';

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "</br>");
} 

// Create database
$sql = "DROP DATABASE ".$dbname;
if ($conn->query($sql) === TRUE) {
    echo "Database removed successfully</br><a href='/basic-angularjs-xampp-boostrap/'>Back</a>";
} else {
    echo "Error removing database: " . $conn->error . "</br>";
}

$conn->close();

?>