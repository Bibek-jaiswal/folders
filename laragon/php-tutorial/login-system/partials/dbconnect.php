<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "information";
 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
//     echo "Successfully connected.";

// }else{
    die("Error" . mysqli_connect_error());
}





?>