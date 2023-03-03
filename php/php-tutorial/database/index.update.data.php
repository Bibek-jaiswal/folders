<?php


$servername = 'localhost';
$username = 'root';
$password = "";
$dbname = 'myDBTEST';

$newconn = new mysqli($servername, $username, $password, $dbname);

if ($newconn->connect_error){
    die ("Connection failed: " . $newconn->connect_error);
}
$sql = "UPDATE myTEST SET post = 'Developer' WHERE id = 2";

if ($newconn->query($sql)===TRUE){
    echo "Data updated succesfully";
} else{
    echo "Error updating data: " .$newconn->error;
}




?>