
<?php 
require("db.php");
require("./partials/register.html");




























































// $fname = mysqli_real_escape_string($conn,$_POST['fname']);
// $email = mysqli_real_escape_string($conn,$_POST['email']);
// $password = mysqli_real_escape_string($conn,$_POST['password']);
// $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);

// if(empty($fname) || empty($email) || empty($password) || empty($cpassword)){
//         echo "Please fill the form as per required.";

//     return;

//     }

//       if($password != $cpassword){
//         echo $passmatch = "Passwords don't match.";
//         return;
//     }
//      else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         echo $emailvalid = " Enter a valid email.";
//         return;

//     } 
   
//     else if(strlen($password) < 8){
//         echo $passlength = "Password should be atleast 8 characters long.";
//         return;

//     }
//     else if(!preg_match("#[0-9]+#",$password)){
//         echo $passnum = "Password must include atleast a number.";
//         return;

//     }

//     else if (!preg_match("#[a-zA-Z]+#", $password)){
//         echo $passletter ="Password must include atleast one letter.";
//         return;

//     } 
    
    
    
    
    
    
    
    
    
    
    // else{
    //     require("/form.login.html");
    // }
     









































// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

    // $fname = $_POST["fname"];
    // $email = $_POST["email"];
    // $password = $_POST["password"];
    // $cpassword = $_POST["cpassword"];

    


    // $pattern_fname = "/^[a-zA-Z-' ]*$/";
    // $pattern_email = '/^[a-z0-9]{1,}$/';
    // $pattern_password = '/[A-Z][a-z]\#$%?{}/';

   


    // if ($_SERVER["REQUEST_METHOD"] == "POST"){


    //     $password = $_POST["password"];
        
    //     $uppercase = preg_match('@[A-Z]@',$password);
    //     $lowercase = preg_match('@[a-z]@', $password);
    //     $number = preg_match('@[0-9]@', $password);
    //     $specialchars = preg_match('/[^a-z0-9 _]+/i', $password);
    //     switch ($password){
    //         case (!$uppercase):
    //             return "Must include atleast an uppercase letter.<br>";
    //             break;
    //         case (!$lowercase):
    //             return "Must include atleast one lowercase letter.<br>";
    //                 break;
    //         case (!$number):
    //             return "Must include a number.<br>";
    //                 break;
    //         case (!$specialchars):
    //             return "Must include a special character.<br>";
    //                 break;
    //         case (strlen($password)<8):
    //             return "Password must be atleast 8 characters in length.<br>";
    //                 break;
            // case((!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password)<8)):
            //     echo '<div class="md:w-2/3">
            //     <a href="/register.confirmation_page.php"><button type="submit"></a>
            //      Submit
            //    </button>
            //  </div>';
            //         break;
            // default:
            // require("./partials/register.html");

            //         break;
            //                 }
            //             }



                        // if (filter_var($email, FILTER_VALIDATE_EMAIL)==True) {
                        //     echo 'VALID';
                        // } 
                        // else {
                        //     echo 'NOT VALID';
                        // }







    // if (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password)<8){
    //     echo "Password should be atleast 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    
    // }  
    // else {
    //     echo "Strong password";
    // }



    // if(preg_match($pattern_fname, $fname)){
    //     echo 'VALID';
    // } 
    
    // else {
    //     echo 'NOT VALID';
    // }
    // if($cpassword == $password){
    //     echo "Go ahead";

    // } 
    // else {
    //     echo "Password and Confirm password should be same.";
    // }




    // if(empty($fname) || empty($email) || empty($password)){
    //     echo "Please fill the form as per required.";
    // } else if (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password)<8 == True){
    //     echo "Password should be atleast 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    
    // }  else if (filter_var($email, FILTER_VALIDATE_EMAIL)== FALSE) {
    //     echo 'Email is not valid!<br>';
    // } else if(preg_match($pattern_fname, $fname) == FALSE){
    //     echo 'First name is not valid!<br>';
    // } else  if($cpassword != $password){
    //     echo "Fill the password correctly.";

    // } 
    


                    
    
    
    // else{
    //     require("./partials/register.html");
    // }
?>


