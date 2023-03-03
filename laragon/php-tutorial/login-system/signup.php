<?php 
    $showalert = false;
    $showerror = false;
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

    } else{
        $showerror = "Passwords do not match.";
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

    if($showalert)
    {

        echo '
    
    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
        
    }
    if($showerror)
    {

        echo '
    
    
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error</strong> '. $showerror . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
        
    }
?>


    <div class="container">
        <h1 class="text-center">Signup To Our Website</h1>


        <form action="/login-system/signup.php" method="post">
            <div class="form-group col-md-6">

                <label for="username">Username</label>
                <input type="email" class="form-control" id="username" aria-describedby="emailHelp" name="username" placeholder="Enter username">
            </div>


            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="password">


            </div>
            <div class="form-group col-md-6">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="confirm password">
                <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>


            </div>


            <button type="submit" class="btn btn-primary col-md-6">SignUp</button>
        </form>









    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>