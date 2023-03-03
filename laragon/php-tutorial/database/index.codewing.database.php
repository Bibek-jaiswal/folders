<?php

$servername = "localhost";
$username = "root";
$password = "";




$conn =  new mysqli($servername, $username, $password);

if ($conn ->connect_error){
    die("Connection failed" . $conn->connect_error);
}



$sql = "CREATE DATABASE myCODEWING";
if ($conn -> query($sql) === TRUE){
    echo "Database created succesfully.";
} else{
    echo "Error creating database.";
}
// $conn_close();


?>



