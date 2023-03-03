<?php
require("./partials/navbar.html");
// require("form.login.html") 

// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect the user to welcome page

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit;
}

// Include database file
require("db.php");

// Define variables and initialize with empty values

$fname = $email = $password = "";
$fname_err /*= $email_err */ = $password_err = $login_err = "";

// Processing form data when form is submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if name is empty
    if (empty(trim($_POST["fname"]))) {
        $fname_err = "Please enter fullname.";
    } else {
        $fname = trim($_POST["fname"]);
    }

    // Check if email is empty
    // if (empty(trim($_POST["email"]))) {
    //     $email_err = "Please enter email.";
    // } else {
    //     $email = trim($_POST["email"]);
    // }


    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $email = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($fname_err) && empty($email_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, fname, email, password FROM accounts WHERE fname = ?";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_fname);

            // Set parameters
            $param_fname = $fname;

            // Attempt to execute the prepared statement

            if (mysqli_stmt_execute($stmt)) {

                // Store result
                mysqli_stmt_execute($stmt);

                // Check if fname exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {

                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $fname, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {


                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["fname"] = $fname;

                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else {
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid fullname or password.";
                        }
                    }
                } else {
                    // Fullname doesn't exist, display a generic error message
                    $login_err = "Invalid fullname or password.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($conn);
}

//91
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-size: 14px;
            font-family: sans-serif;

        }

        .wrapper {
            width: 360px;
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php

        if (!empty($login_err)) {
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }

        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="form-group">
                <label>Fullname</label>
                <input type="text" name="fname" class="form-control <?php echo (!empty($fname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $fname; ?>">
                <span class="invalid-feedback"><?php echo $fname_err; ?></span>
            </div>


            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>

            <div class="form-group">

                <input type="submit" class="btn btn-primary" value="Login">
            </div>

            <p>Don't have an account? <a href="/session.php">Sign up now</a>.</p>

        </form>

    </div>


</body>

</html>
















<?php

    // if($_SERVER["REQUEST_METHOD"]=="POST"){
        //     $fname = $_POST['fname'];
        //     if ($input_fname != $pattern_fname){
                
        //         echo $inv_fname . "<br>";
        //     } 
            
        //     else{
        //         echo $fname;
        //     }
        // }
        
        
        // if($_SERVER["REQUEST_METHOD"]=="POST"){
        //     $email = $_POST['email'];
        //     if ($input_email != $pattern_email){
                
        //         echo $inv_email . "<br>";
        //     } 
        //     else{
        //         echo $email;
        //     }
        // }
        
        
        
        // if($_SERVER["REQUEST_METHOD"]=="POST"){
        //     $password = $_POST['password'];
        //     if ($input_password != $pattern_password){
                
        //         echo $inv_password . "<br>";
        //     }
            
        //     else{
        //        echo $password;
        //     }
        // }
        
        
        
        // if($_SERVER["REQUEST_METHOD"]=="POST"){
        //     $cpassword = $_POST['cpassword'];
        //     if ($input_confirm_password != $pattern_confirm_password){
                
        //         echo $inv_cpassword . "<br>";
        //     } 
        //     else{
        //         echo $cpassword;
        //     }
        // }
