<?php

$servername = "localhost";
$username = "root";
$password = "";

$connection = new mysqli($servername,$username, $password);

if ($connection->connect_error){
    die("Connection failed: ".$connection->connect_error);
}

$sql = "CREATE DATABASE 2020_10";
if ($connection->query($sql) === TRUE){
    echo "Database created successfully";
} else {
    echo "Error creating database: ".$connection->error;
}


$connection->close();
?>