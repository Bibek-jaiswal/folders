<?php

session_start();
if(isset($_SESSION['loggedin'])){

    header("location: welcome.php");

    exit;


}

?>











<?php
$login = false;
$showerror = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require("./partials/_dbconnect.php");

    //    $fname = $_POST["fname"];


    $email = $_POST["email"];
    $password = $_POST["password"];


    //    $cpassword = $_POST["cpassword"];

    // $sql = "Select * from users where email='$email' AND password='$password'";
    // $result = mysqli_query($conn, $sql);
    // $num = mysqli_num_rows($result);
    // if ($num == 1) {
    //     $user = mysqli_fetch_assoc($result);
    //     $login = true;
    //     session_start();
    //     $_SESSION['loggedin'] = true;
    //     $_SESSION['fname'] = $user['fullname'];
    //     $_SESSION['email'] = $email;
    //     header("location: welcome.php");
    // } else {
    //     $showerror = "Invalid credentials";
    // }



    $sql = "Select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['password'])) {

                $login = true;
                // $user = mysqli_fetch_assoc($result);
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['fname'] = $row['fullname'];
                $_SESSION['email'] = $email;
                header("location: welcome.php");
            } else {
                $showerror = "Invalid credentials";
            }
        }
    } else {
        $showerror = "Invalid credentials";
    }
// }






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

    <title>Log In</title>

</head>

<body>
    <?php require("partials/_nav.php"); ?>

    <?php
    if ($login) {
        echo
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> Your are logged in.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
    if ($showerror) {
        echo
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showerror . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }


    ?>







    <div class="container my-4">
        <h1 class="text-center">Log In to Our Website</h1>


        <form action="/login.php" method="post">


            <!-- <div class="form-group ">
                <label>Full Name</label>
                <input type="text" name="fname" class="form-control">
            </div> -->



            <div class="form-group ">
                <label>Email</label>
                <input type="text" name="email" class="form-control"  maxlength="50" required>
            </div>



            <div class="form-group ">
                <label>Password</label>
                <input type="password" class="form-control" name="password"  maxlength="50" required>
            </div>



            <!-- <div class="form-group ">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="cpassword">
                <small id="emailHelp" class="form-text text-muted">Make sure to type the same password.</small>
            </div> -->









            <button type="submit" class="btn btn-primary ">Log In</button>
        </form>
<br>
<br>
<br>
        <p>Don't have an account, Register Now using this link -> <a href="/signup.php">Register Now</a>.</p>




























    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>