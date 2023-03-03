<?php

$read = fopen("file.txt", "r");



// $fptr = fread($read, filesize("file.txt"));

// fclose($read);
// echo fgetc($read);
// echo "<br>";
// echo fgets($read);
while($a = fgetc($read)){
    echo $a;
    if ($a =="d") {
        break;
    }
}


?>

