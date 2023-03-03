<?php require("index.php");?>



<style>
    h2{
        display: none;
    }
</style>

<div class="container">
<h1>It's the contact page.</h1>

<div class="gap" style="padding-top: 40px;">
<form class="w-full max-w-sm" method="post" action="/index.contact.php">
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
        Name
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="name" name="name">
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
        Password
      </label>
    </div>
    <div class="md:w-2/3">
      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password" type="password" name="pass" >
    </div>
  </div>
  <div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3"></div>
   
  </div>
  <div class="md:flex md:items-center" style="padding: 30px 0;">
    <div class="md:w-1/3"></div>
    <div class="md:w-2/3">
      <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
       Submit
      </button>
    </div>
  </div>
</form>
</div>

<p >


<?php 
  

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = $_POST['name'];
    if (empty($name)){
        echo "Please fill the form.";
    }else {
        echo "The name is " . $name . " and";
        echo "<br>";
    }
}


if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $pass = $_POST['pass'];
    if (empty($pass)){
        echo "Please fill the form.";
    }else {
        echo "The password is " . $pass;
    }
}

?>

</p>
</div>