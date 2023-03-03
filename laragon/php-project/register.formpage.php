<?php 
    require ("./partials/navbar.html");
    require("RegEx.php");  
    require("form.register.php") 
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
// if(isset($_POST["submit"])){
//     echo 
//      " <style> .container{ display:none;}</style>
//     <p> Your account has been registered.</p>";
// }


// require("./partials/register.html");















































// $fname = $_POST["fname"];
// $email = $_POST["email"];

// $cpassword = $_POST["cpassword"];

// $uppercase = preg_match('@[A-Z]@',$password);
// $lowercase = preg_match('@[a-z]@', $password);
// $number = preg_match('@[0-9]@', $password);
// $specialchars = preg_match('/[^a-z0-9 _]+/i', $password);

// if (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password)<8 == True){
//     echo "Password should be atleast 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    
// }  



// function password_results(){

//     if ($_SERVER["REQUEST_METHOD"] == "POST"){


//         $password = $_POST["password"];
        
//         $uppercase = preg_match('@[A-Z]@',$password);
//         $lowercase = preg_match('@[a-z]@', $password);
//         $number = preg_match('@[0-9]@', $password);
//         $specialchars = preg_match('/[^a-z0-9 _]+/i', $password);
//         switch ($password){
//             case (!$uppercase):
//                 echo "Must include atleast an uppercase letter.<br>";
//                 break;
//             case (!$lowercase):
//                 echo "Must include atleast one lowercase letter.<br>";
//                     break;
//             case (!$number):
//                 echo "Must include a number.<br>";
//                     break;
//             case (!$specialchars):
//                 echo "Must include a special character.<br>";
//                     break;
//             case (strlen($password)<8):
//                 echo "Password must be atleast 8 characters in length.<br>";
//                     break;
            // case((!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password)<8)):
            //     echo '<div class="md:w-2/3">
            //     <a href="/register.confirmation_page.php"><button type="submit"></a>
            //      Submit
            //    </button>
            //  </div>';
            //         break;
//             default:
//                 echo "";
//                     break;
//                             }
//                         }
//                     }
               
// password_results();
                    
                    
//                     ?>

</div>