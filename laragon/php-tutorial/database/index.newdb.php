<?php

$servername = 'localhost';
$username = 'root';
$password = "";

$newconn = new mysqli($servername, $username, $password);

if ($newconn ->connect_error ){
    die ("connection failed: " . $newconn->connect_error);
}

$sql = "CREATE DATABASE myDBTEST";

if ($newconn -> query($sql)===TRUE){
    echo "DATABASE created successfully";

} else {
    echo "Error creating database: " . $newconn->error;
}

$newconn->close();









?>