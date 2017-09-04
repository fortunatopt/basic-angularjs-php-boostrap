<?php

error_reporting(0);
mysqli_report(MYSQLI_REPORT_STRICT);

// This is a simple function to SELECT data from a MySQL database
// It takes the query, server, username, password, and the database
// to to run the query against
function read($sql, $servername, $username, $password, $dbname) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Create array for return
    $rows = array();
    // Run query
    $result = $conn->query($sql);
    // If data, then populate array
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }
    // Close connection
    $conn->close();
    // Return JSON array
    return json_encode($rows);
}

// This is a simple function execute a query against a MySQL database
// It takes the query, server, username, password, and the database
// to to run the query against
function execute($sql, $servername, $username, $password, $dbname) {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    // Run query
    if ($conn->query($sql) === TRUE) {
        return "Query executed successfully";
    } else {
        return "Error: ".$sql."<br>".$conn->error;
    }
    // Close connection
    $conn->close();
}

// This is a simple function create a database on a MySQL server
// It takes the query, server, username, password to to run the
// query against
function create($sql, $servername, $username, $password) {    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Run query
    if ($conn->query($sql) === TRUE) {
        return "Database created successfully";
    } else {
        return "Error creating database: " . $conn->error;
    }
    // Close connection
    $conn->close();

}

?>