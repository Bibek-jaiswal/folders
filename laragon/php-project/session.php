<?php

require("db.php");



    session_start();
    // if(!isset($_SESSION["username"])){
    //     header("location: loginpage.php");
    //     exit();
    // }



    // Define variables and initialize with empty values 
        $fname = $email = $password = $cpassword = "";
        $fname_err = $email_err = $password_err = $cpassword_err = "";


        // Processing from data when form is submitted
        if($_SERVER["REQUEST_METHOD"] == "POST"){

// Validate fname
            if(empty(trim($_POST["fname"]))){
                $fname_err = "Please enter a full name.";
            } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["fname"]))){
                $fname_err = "Username can only contain letters, numbers, and underscores.";
            } else{
                
                //Prepare a select statement
                $sql = "SELECT id FROM accounts WHERE fname = ?";
                
                if($stmt = mysqli_prepare($conn,$sql)){
                    
                    mysqli_stmt_bind_param($stmt, "s", $param_fname);
                    
                    //Set parameters
                    $param_fname = trim($_POST["fname"]);
                    
                    //Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        
                        //store result
                        mysqli_stmt_store_result($stmt);
                        
                        if(mysqli_stmt_num_rows($stmt) == 1){
                            $fname_err = "This fullname is already taken.";
                        } else{
                            $fname = trim($_POST["fname"]);
                        }
                        
                        
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    
                    
                    
                    // Close statement
                    mysqli_stmt_close($stmt);
                }
        }

    }
        //Validate email
        //Doubt check please!!
    
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST["email"];
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email address.";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_err = "Invalid email address.";
    }else {
       $email = trim($_POST["email"]);  
    } 
    
    }
    
    // if(empty(trim($_POST["email"]))){
    //     $email_err = "Please enter a email address.";
    // } else {
    //     $email = $_POST["email"];
    //     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    //         $email_err = "Invalid email address.";
    //     }
    // } 


// Validate password

if($_SERVER["REQUEST_METHOD"] == "POST"){

    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a passwowrd.";
    } elseif(strlen(trim($_POST["password"]))<8){
        $password_err = "Password must have atleast 8 characters.";
    }else{
        $password = trim($_POST["password"]);
    }
    
}

// Validate confirm password

if($_SERVER["REQUEST_METHOD"] == "POST"){

    
    if(empty(trim($_POST["cpassword"]))){
        $cpassword_err = "Please confirm password.";
    }else{
        $cpassword = trim($_POST["cpassword"]);
        if(empty($password_err) && ($password != $cpassword)){
            $cpassword_err = "Password did not match.";
        }
    }
    
}
// Check input errors before inserting in database

if(empty($fname_err) && empty($email_err) && empty($password) && empty($cpassword)){

// Prepare an insert statement

$sql = "INSERT INTO accounts (fname, email, password) VALUES(?,?,?)";

if($stmt = mysqli_prepare($conn, $sql)){

// Bind variables to the prepared statement as parameters
mysqli_stmt_bind_param($stmt, "sss", $param_fname, $param_email, $param_password);

// set parameters

$param_fname = $fname;
$param_email = $email;
// Creates a password hash
$param_password = password_hash($password, PASSWORD_DEFAULT);

//Attempt to execute the prepared statement

if(mysqli_stmt_execute($stmt)){

//Redirect to login page
    header("location: loginpage.php");
} else{
    echo "Oops! Something went wrong. Please try again later.";
}




}

// Close conection
mysqli_close($conn);



}
?>





<!-- Form also made -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
            font-size: 14px;
            font-family: sans-serif;
        }
        .wrapper{
            width: 360px;
            padding: 20px;
    }
    </style>
</head>
<body>
    
    <div class="wrapper">
    <h2>Sign Up</h2>
    <p>Please fill this form to create an account.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <div class="form-group">
        <label >Full Name</label>
        <input type="text" name="fname" class="form-control<?php echo (!empty($fname_err))? 'is-invalid' : ''; ?>"  value="<?php $fname ?>">
        <span class="invalid-feedback"><?php echo $fname_err; ?></span>
    </div>

    <div class="form-group">
        <label >Email</label>
        <input type="email" name="email" class="form-control<?php echo (!empty($email_err))? 'is-invalid' : ''; ?>"  value="<?php $email ?>">
        <span class="invalid-feedback"><?php echo $email_err; ?></span>
    </div>

    <div class="form-group">
        <label >Password</label>
        <input type="password" name="password" class="form-control<?php echo (!empty($password_err))? 'is-invalid' : ''; ?>"  value="<?php $password ?>">
        <span class="invalid-feedback"><?php echo $password_err; ?></span>
    </div>

    <div class="form-group">
        <label >Confirm passoword</label>
        <input type="password" name="cpassword" class="form-control<?php echo (!empty($cpassword_err))? 'is-invalid' : ''; ?>"  value="<?php $cpassword ?>">
        <span class="invalid-feedback"><?php echo $cpassword_err; ?></span>
    </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">

        </div>

        <p>Already have an account? <a href="loginpage.php">Login here</a>.</p>
</form>
</div>
</body>
</html>




