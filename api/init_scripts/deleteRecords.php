<?php

include '../config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "</br>");
} 

$sql = "DELETE FROM ".$tblName;

if ($conn->query($sql) === TRUE) {
    echo "All records deleted successfully<br>";
} else {
    echo "Error: ".$sql."<br>".$conn->error . "</br>";
}

$conn->close();
?>