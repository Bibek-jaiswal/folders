<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myCODEWING";



$conn =  new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
$sql = "INSERT INTO EmployeeTable (firstname,lastname,email)
VALUES ('Amit','Acharya','amit.codewing@gmail.com');";
$sql .= "INSERT INTO EmployeeTable (firstname,lastname,email)
VALUES ('Abhisek','Rijal','abhisek.codewing@gmail.com');";
$sql .= "INSERT INTO EmployeeTable (firstname,lastname,email)
VALUES ('Raj','Kumar_Tamang','raj.codewing@gmail.com');";
$sql .= "INSERT INTO EmployeeTable (firstname,lastname,email)
VALUES ('Madan','G.C.','madan.codewing@gmail.com');";
$sql .= "INSERT INTO EmployeeTable (firstname,lastname,email)
VALUES ('Basanta','Chaudhary','basanta.codewing@gmail.com');";


if (mysqli_multi_query($conn, $sql) === TRUE) {
    echo "ALL ID created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
