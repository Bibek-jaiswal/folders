<?php


$servername = 'localhost';
$username = 'root';
$password = "";
$dbname = 'myDBTEST';

$newconn = new mysqli($servername, $username, $password, $dbname);

if ($newconn->connect_error){
    die ("Connection failed: " . $newconn->connect_error);
}
$sql = "SELECT id, name, post  FROM myTEST ORDER BY name LIMIT 3,4 ";
$result = $newconn->query($sql);



if ($result->num_rows > 0){
   while ($row = $result -> fetch_assoc()) {
   echo "id: " . $row["id"] . " - Name - " . $row["name"] . " - Post - " . strtoupper($row["post"]) . "<br>";
   }
} else{
    echo "0 results";
}




?>