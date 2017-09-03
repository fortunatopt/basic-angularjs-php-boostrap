<?php

error_reporting(0);
mysqli_report(MYSQLI_REPORT_STRICT);

function test1($string) {
    return $string;
}
function test2($string) {
    return $string;
}
function test3($string) {
    return $string;
}

function createDB ($sql, $databaseName, $servername, $username, $password) {
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error . "</br>");
    } 
    
    // Create database
    if ($conn->query($sql) === TRUE) {
        return "Database ".$databaseName." created successfully</br>";
    } else {
        return "Error creating database ".$databaseName.": " . $conn->error . "</br>";
    }
    
    $conn->close();

}

function dropDB ($sql, $databaseName, $servername, $username, $password) {
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error . "</br>");
    } 
    
    // Create database
    if ($conn->query($sql) === TRUE) {
        return "Database ".$databaseName." removed successfully</br>";
    } else {
        return "Error removing database ".$databaseName.": " . $conn->error . "</br>";
    }
    
    $conn->close();

}

function createTable($sql, $servername, $dbname, $username, $password) {

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error . "</br>");
    } 

    if ($conn->query($sql) === TRUE) {
        return "Table ".$tableName." created successfully<br>";
    } else {
        return "Error creating table ".$tableName.": " . $conn->error . "</br>";
    }

    $conn->close();

}

function insertData($sql, $servername, $username, $password, $dbname) {
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error . "</br>");
    } 
    
    if ($conn->query($sql) === TRUE) {
        return "New records created successfully</br>";
    } else {
        return "Error: ".$sql."<br>".$conn->error . "</br>";
    }
    
    $conn->close();

}

function deleteData($sql, $servername, $username, $password, $dbname) {
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error . "</br>");
    } 

    if ($conn->query($sql) === TRUE) {
        return "All records deleted successfully<br>";
    } else {
        return "Error: ".$sql."<br>".$conn->error . "</br>";
    }

    $conn->close();

}

function selectData($sql, $servername, $username, $password, $dbname) {
    
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

?>