<?php 
    require ("./partials/navbar.html");
    // require("RegEx.php");  
    require("form.register.html"); 
?>
<head>
    <style>
        .container-1 {
            max-width: 1000px;
            margin: 0 auto;
            padding: 30px 20px;
          
        }
    </style>
</head>
<div class="container-1">

    <?php

// $fname = $_POST["fname"];
// $email = $_POST["email"];
$password = $_POST["password"];

// $cpassword = $_POST["cpassword"];

// $uppercase = preg_match('@[A-Z]@',$password);
// $lowercase = preg_match('@[a-z]@', $password);
// $number = preg_match('@[0-9]@', $password);
// $specialchars = preg_match('/[^a-z0-9 _]+/i', $password);

// if (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password)<8 == True){
//     echo "Password should be atleast 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    
// }  



function password_results($password){

        $uppercase = preg_match('@[A-Z]@',$password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        $specialchars = preg_match('/[^a-z0-9 _]+/i', $password);
        switch ($password){
            case (!$uppercase):
                 echo "Must include atleast an uppercase letter.";
             break;
            case (!$lowercase):
                 echo "Must include atleast one lowercase letter.";
            break;
            case (!$number):
                 echo "Must include a number.";
             break;
            case (!$specialchars):
                 echo "Must include a special character.";
             break;
             case (strlen($password)<8):
                echo "Password must be atleast 8 characters in length.";
             break;
             default:
                echo "";
             break;
        }
}
               
password_results($password);
                    
                    
                    ?>

</div>