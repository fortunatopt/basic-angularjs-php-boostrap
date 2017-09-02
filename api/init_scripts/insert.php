<?php

include '../config.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "</br>");
} 

$sql = "INSERT INTO ".$tblName." (firstname, lastname, email) VALUES
    ('John', 'Flintsone',   'jf@example.com'),
    ('Fred', 'Rubble',      'fr@example.com'),
    ('Alex', 'Johnson',     'aj@example.com'),
    ('Herb', 'Jones',       'hj@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New records created successfully</br>";
} else {
    echo "Error: ".$sql."<br>".$conn->error . "</br>";
}

$conn->close();
?>