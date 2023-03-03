
<?php

session_start();
if(isset($_SESSION['loggedin'])){
    header("location: welcome.php");

    exit;


}



?>













<?php
$showalert = false;
$showerror = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require("./partials/_dbconnect.php");
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $exists = false;
    // $existsql = "SELECT * FROM users WHERE fullname = '$fname' OR email = '$email'";
    // $result = mysqli_query($conn, $existsql);
    // $numexistrows = mysqli_num_rows($result);



    // Username exists or not check
    $existsql_1 = "SELECT * FROM users WHERE fullname = '$fname'";
    $result_fname = mysqli_query($conn, $existsql_1);
    $numexistrows_fname = mysqli_num_rows($result_fname);
    
    // Email exists or not check
    $existsql_2 = "SELECT * FROM users WHERE email = '$email'";
    $result_email = mysqli_query($conn, $existsql_2);
    $numexistrows_email = mysqli_num_rows($result_email);
    
    
    if ($numexistrows_fname > 0) {
        // $exists = true;
        $showerror = "Username already exists.";
    } 
    elseif ($numexistrows_email > 0) {
        // $exists = true;
        $showerror = "Email already exists.";
    }  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
        $showerror = "Email not valid.";
    
    
    
    }



    // if ($numexistrows > 0) {
    //     // $exists = true;
    //     $showerror = "Username or email already exists.";
    // } 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    else {
        // $exists = false;

        // if (strlen($password) < 8) {
        //     $showerror = "Password must contain atleast 8 characters.";
        // } 
        // if ($password) {
            
            
            // $uppercase = preg_match('@[A-Z]@', $password);
            // $lowercase = preg_match('@[a-z]@', $password);
            // $number    = preg_match('@[0-9]@', $password);
            // $specialChars = preg_match("#[a-zA-Z]+#", $password);
            
            //     if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                //        $showerror = "Password must contain atleast a lowercase, an uppercase, a number, a special character and must be of length atleast 8 characters.";

        //     }

        
        
        
        // }
        
        
        
        
        
        
        $letter = preg_match("#[a-zA-Z]+#", $password);
        $number = preg_match("#[0-9]+#",$password);
        // $specialchars = preg_match("#[^&$*@#%<>?]+#", $password); 




        if (($password == ($cpassword)    &&  (preg_match("#[a-zA-Z]+#", $password)) && (preg_match("#[0-9]+#",$password)) &&  (preg_match("#[^&$*{}()!<>?]+#", $password))  && strlen($password) >= 8 )) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users`.`users` ( `fullname`, `email`, `password`, `dt`) VALUES ( '$fname', '$email', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showalert = true;
            }
        } else {
            $showerror = "Passwords do not match or criteria is not met.";
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
    <?php require("partials/_nav.php"); ?>

    <?php
    if ($showalert) {
        echo
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> Your account is now created and you can login.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';

        // header("location: welcome.php");






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
        <h1 class="text-center">Sign Up to Our Website</h1>


        <form action="/signup.php" method="post">


            <div class="form-group ">
                <label>Full Name</label>
                <input type="text" name="fname" maxlength="50" class="form-control" required>
            </div>



            <div class="form-group ">
                <label>Email</label>
                <input type="text" name="email" maxlength="50" class="form-control" >
            </div>



            <div class="form-group ">
                <label>Password</label>
                <input type="password" class="form-control" maxlength="50" name="password" required>
                <small id="emailHelp" class="form-text text-muted">Make sure to include atleast a special character(except $,%,^), an uppercase, a lowercase, a number and must be atleast 8 characters.</small>

            </div>



            <div class="form-group ">
                <label>Confirm Password</label>
                <input type="password" class="form-control" maxlength="50" name="cpassword" required>
                <small id="emailHelp" class="form-text text-muted">Make sure to type the same password.</small>
            </div>









            <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
        </form>
       



    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>


