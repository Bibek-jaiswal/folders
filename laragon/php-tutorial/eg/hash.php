<?php

$a = "password";
$b = "newpassword";

$hash_a = password_hash($a, PASSWORD_DEFAULT);



if($a = "password"){
$hash_a = password_hash($a, PASSWORD_DEFAULT);
for ($i=1; $i < 10; $i++) { 
    echo $hash_a;
    echo "<br>";
}
}




// for ($i=1; $i < 10; $i++) { 
//     echo $hash_a;
//     echo "<br>";
// }













?>