<?php 
    $showalert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    require ("partials/dbconnect.php");
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $exists =false;


    if(($password == $cpassword) && $exists == false ){

        $sql = "INSERT INTO `information`.`infromation_table` (`Username`, `Password`, `Confirm Password`) VALUES ('$username', '$password', '$cpassword');";
        $result = mysqli_query($conn, $sql);

        if($result){
            $showalert = true;
        }

    }

}


?>





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Sign Up</title>
</head>

<body>
    <h1>Hello, world!</h1>
    <?php require("partials/_nav.php") ?>







<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "information";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT S.No., Username, Password, Confirm Password FROM information_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["S.No."]. " - Username: " . $row["username"]. " " . " - Password: " . $row["password"]. " " . " -Confirm Passsword: " . $row["cpasssword"]. " " . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>










    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>