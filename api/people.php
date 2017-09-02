<?php

error_reporting(0);
mysqli_report(MYSQLI_REPORT_STRICT);

include 'config.php';


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$rows = array();
$sql = "SELECT * FROM ".$tblName;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
}

$conn->close();

print json_encode($rows);

?>