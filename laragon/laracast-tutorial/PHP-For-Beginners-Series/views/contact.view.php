<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>Hello. Welcome to the contact page.</p>
    </div>

    <?php require('../controllers/index.form.php')?>
 <?php //echo "Your information has been stored as name = "
 //. $_POST["name"] . " and pass =" . $_POST["pass"];  ?> 

<p style="text-align: center;">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo "The name is : " . $name;
        echo "<br>";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pass = $_POST['pass'];
    if (empty($pass)) {
        echo "Password is empty";
    } else {
        echo  "The pass is : " . $pass;
    }
}

 ?>
</p>
</main>


<?php require('partials/footer.php') ?>