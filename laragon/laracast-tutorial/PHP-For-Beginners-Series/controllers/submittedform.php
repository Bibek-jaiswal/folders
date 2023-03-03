<?php
view("contact.view.php", [
    'heading' => 'Contact Us',
    'name'=> $name,
    'pass' => $pass,
]);
?>

<?php


echo "Your form has been submitted as name =" . $_POST["name"] . "and pass = " . $_POST["pass"];
?>