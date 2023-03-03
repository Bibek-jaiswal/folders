<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = new mysqli($servername, $username, $password,$dbname);

// $conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }



// echo "Connected successfully";

// $sql = "CREATE DATABASE login";
// if($conn->query($sql) === TRUE){
//     echo "DATABASE created successfully.";
// } else{
//     echo "Error creating database: " . $conn->error;
// }


// $sql = "CREATE TABLE accounts (
//     id INT(6) NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     fname VARCHAR(50) NOT NULL UNIQUE,
//     email VARCHAR(60) NOT NULL UNIQUE,
//     password VARCHAR(255) NOT NULL,
//     created_at DATETIME DEFAULT CURRENT_TIMESTAMP
// )";

// if($conn->query($sql) === TRUE){
//     echo "TABLE created successfully.";

// }else {
//     echo "Error creating table: " . $conn->error;
// }





?>