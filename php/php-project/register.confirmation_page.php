
<?php  



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];




    $pattern_fname = "/^[a-zA-Z-' ]*$/";
    $pattern_email = '/^[a-z0-9]{1,}$/';
    // $pattern_password = '/[A-Z][a-z]\#$%?{}/';

    $uppercase = preg_match('@[A-Z]@',$password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $specialchars = preg_match('/[^a-z0-9 _]+/i', $password);


    // if (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password)<8){
    //     echo "Password should be atleast 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    
    // }  
    // else {
    //     echo "Strong password";
    // }



    // if (filter_var($email, FILTER_VALIDATE_EMAIL)==True) {
    //     echo 'VALID';
    // } 
    // else {
    //     echo 'NOT VALID';
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




    if(empty($fname) || empty($email) || empty($password)){
        echo "Please fill the form as per required.";
    } else if (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($password)<8 == True){
        echo "Password should be atleast 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    
    }  else if (filter_var($email, FILTER_VALIDATE_EMAIL)== FALSE) {
        echo 'Email is not valid!<br>';
    } else if(preg_match($pattern_fname, $fname) == FALSE){
        echo 'First name is not valid!<br>';
    } else  if($cpassword != $password){
        echo "Fill the password correctly.";

    } 
    
    
    
    
    else{
        require("./partials/register.html");
    }
?>


