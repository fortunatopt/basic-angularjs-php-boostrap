<?php

error_reporting(0);
mysqli_report(MYSQLI_REPORT_STRICT);

function read($sql, $servername, $username, $password, $dbname) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $rows = array();

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }

    $conn->close();

    return json_encode($rows);
}

function execute($sql, $servername, $username, $password, $dbname) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    if ($conn->query($sql) === TRUE) {
        return "Query executed successfully";
    } else {
        return "Error: ".$sql."<br>".$conn->error;
    }

    $conn->close();
}



function create($sql, $servername, $username, $password) {
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    // Create database
    if ($conn->query($sql) === TRUE) {
        return "Database created successfully";
    } else {
        return "Error creating database: " . $conn->error;
    }
    
    $conn->close();

}

?>