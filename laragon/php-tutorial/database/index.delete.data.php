<?php


$servername = 'localhost';
$username = 'root';
$password = "";
$dbname = 'myDBTEST';

$newconn = new mysqli($servername, $username, $password, $dbname);

if ($newconn->connect_error){
    die ("Connection failed: " . $newconn->connect_error);
}
$sql = "DELETE FROM myTEST  WHERE id = 7";


if ($newconn->query($sql)===TRUE){
    echo "Data deleted succesfully";
} else{
    echo "Error deleting data: " .$newconn->error;
}

$newconn->close();


?>