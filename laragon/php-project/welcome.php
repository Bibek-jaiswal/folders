<?php
    require ("./partials/navbar.html");
    // require("RegEx.php");

// Initialize session 
session_start();

// Check if the user is logged in, if not then redirect the user to login page

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

    header("location: loginpage.php");
    exit;

}



?>




