<?php

$servername = 'localhost';
$username = 'root';
$password = "";
$dbname = 'myDBTEST';

$newconn = new mysqli($servername, $username, $password, $dbname);

// if ($newconn->connect_error){
//     die ("Connection failed: " . $newconn->connect_error);
// }

// $sql = "CREATE TABLE myTEST(

// id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(30) NOT NULL,
// post VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($newconn->query($sql)===TRUE){
//     echo "Table myTEST created successfully";
// } else {
//     echo "Error creating table: " . $newconn->error;
// }


if ($newconn->connect_error){
    die ("Connection failed: " . $newconn->connect_error);
}


// -- VALUES ('Ram' , 'Designer' , 'Ram.codewing@gmail.com')
$sql = "INSERT INTO MyTEST (name, post, email)
VALUES ('Amit' , 'Laravel Developer' , 'Amit.codewing@gmail.com');";
$sql .= "INSERT INTO MyTEST (name, post, email)
VALUES ('Abhisek' , 'Laravel Developer' , 'Abhisek.codewing@gmail.com');";
$sql .= "INSERT INTO MyTEST (name, post, email)
VALUES ('Bibek' , 'Frontend Intern' , 'Bibek.codewing@gmail.com');";

  ;

if ($newconn->multi_query($sql)===TRUE){
    echo "New reocrds successfully.";
}else{
    echo "Error: " . $sql . "<br>" . $newconn->error;
}

$newconn->close();







?>