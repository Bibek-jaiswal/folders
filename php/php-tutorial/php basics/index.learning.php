<?php 
// echo "Hello World!<br> ";
// echo "Hello World!<br> ";
// echo "Hello World!<br> ";
 
// $color = "red";
// $color1 = "green";
// $color2 = "blue";
// echo "My car is " . $color . ".<br>";
// echo "My car is " . $color1 . ".<br> ";
// echo "My car is " . $color2 . ".<br> ";

// echo '<br>';
// $x = 5 + 10  - 8;
// echo $x;

// echo '<br>';
// $txt = "Hello Everyone";
// $a = '9';
// $b = 5;
// echo ($a + $b);

// echo '<h2>PHP is Fun!</h2>';
// echo "Hello world!<br>";
// echo "I'm about to learn PHP!<br>";
// echo "This ", "string ", "was ", "made ", "with multiple parameters. <br>";
// echo "This string was made with multiple parameters. <br>";

// $txt2 = "Learn PHP";
// $txt3 = "W3Schools.com";
// $p = 5;
// $q = 4;

// echo "<h2>$txt2</h2>";
// echo "Study PHP at $txt3 <br>";
// echo "$p + $q <br>";
// echo '<br>';
// echo '<br>';

// $axy = 4;
// var_dump($axy);
// echo '<br>';
// echo '<br>';


// $axyz = "456";
// var_dump($axyz);
// echo '<br>';
// echo '<br>';


// $abc = '4' + '5';
// var_dump($abc);

// $x = 8;
// $y = '5';
// var_dump($x) ;
// echo '<br>';
// var_dump($y) ;


// $x = 100;  

// if ($x != 90) {
//     echo "Hello world!";
// } else{
//     echo 'Hello people';
// }

// $t = 'pseudopodia';

// if (strlen($t) > 25) {
//   echo "Have a good day!";
// } 
// elseif(strlen($t) < 15) {
//       echo "Have a great day!";
// }
//  else {
//   echo "Have a good night!";
// }

// echo date('Y M d H I s');
// $favcolor = "blue";

// switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//     break;
//   case "blue":
//     echo "Your favorite color is blue!";
//     break;
//   case "green":
//     echo "Your favorite color is green!";
//     break;
//   default:
//     echo "Please, choose any color from the list.";
// }


// $x = 60;
// $y = 10;
// $z = $x + $y;
// switch ($z){
//     case $z<10:
//         echo 'The value is less than 10';
//         break;
        
//     case $z<40:
//         echo 'The value is less than 40';
//         break;
        
//     case $z<60:
//         echo 'The value is less than 60';
//         break;
        
//     case $z<80:
//         echo 'The value is less than 80';
//         break;        
//     case $z=100:
//         echo 'The value is 100';
//         break;
//     default:
//             echo ' The value should be kept.';    
// }

// $p = 5;

// echo ++$p;

// echo '<br>';
// echo $p++;

// $x = 5;                                                 
// while($x <= 50) {
//     echo "The value is: $x <br>";
//     $x+=10;
// }

// $x = 5;
// do {
//     echo "The value is: $x <br>";
//     $x += 10;
// }
// while($x <= 50);


// for($a = 1; $a <= 10; $a +=2){
//     echo "The no. you requested for is $a. <br>";
// }

// $people = array("name", "age", "grade", "rank", "position");

// foreach ($people as $requirement) {
//     echo "$requirement <br>";
// }

// function hello(){
//     echo "Hi, Guyz.";
// }
// hello();
// echo '<br>';


// function fname($name, $year){
//     echo "$name Root was born in $year <br>"  ;
   
// }
// fname("Joe", "1990");
// fname("Jos", "1999");
// fname("Kane","2005");

// function people($name, $age){
//     echo "$name is $age years old.<br>";
// }

// people("Ram","20");
// people("Shyam", "30");
// people("Hari", "28");

// function difference(int $a, int $b){
//     return $a - $b;
// }
//  echo difference(500, "200");

// function setHeight(int $minheight = 50) {
//   echo "The height is : $minheight <br>";
// }

// setHeight(350);
// setHeight();
// setHeight(135);
// setHeight(80);

// function productall(int $a , $b): int{
//     return $a * $b;
// }

// echo "3 * 2  = ". productall(3, 2) . "<br>" ;
// echo "4 * 5  = ". productall(4, 5) . "<br>" ;
// echo "6 * 3  = ". productall(6, 3) . "<br>";

// function floatsum($p , $q) : int{
//     return $p + $q;
// }
// echo "4.2 + 3.2 = " . floatsum(4.2 , 3.2) . "<br>";
// echo "3.5 + 4.6 = " . floatsum(3.5 , 4.6) . "<br>";
// echo "9.6 + 10.8 = " . floatsum(9.6 , 10.8) . "<br>";






// $cars = array("Volvo", "BMW", "Toyota");
// $arrlength = count($cars);
// for($x = 0; $x < $arrlength; $x++) {
//   echo $cars[$x];
//   echo "<br>";

// }

// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

// foreach($age as $key => $value) {
//   echo $key . " is " . $value . " years old."  ;
//   echo "<br>";
// }

// $cars = array (
//     array("Volswagon",22, 10),
//     array("BMW", 10, 8),
//     array("Lamberghini",6, 4)
// );
// $cars = ["BMW" => "4", "Ford" => "6","Ferrari" => "2"];
// ksort($cars);
// $clength = count($cars);
// for ($x = 0; $x < $clength; $x++ )
// foreach($cars as $a => $a_value)
// {
//     echo $a . "=" . $a_value;
//     echo $cars[$x];
//     echo "<br>";
// }

    
// echo $cars [0][0]. ": In stock = " . $cars[0][1] . ",sold = " . $cars [0][2] . "." . "<br>";
//     // Volswagon : In stock = 22, sold = 10.
// echo $cars [1][0]. ": In stock = " . $cars[1][1] . ",sold = " . $cars [1][2] . "." . "<br>";
//     // BMW : In stock = 10, sold = 8.
// echo $cars [2][0]. ": In stock = " . $cars[2][1] . ",sold = " . $cars [2][2] . "." . "<br>";
//     // Lamberghini : In stock = 6, sold = 4.


//     echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];

// setcookie("category", "sports", time() + (86400 * 30), "/");
// echo "The cookie is set.";

// session_start();
// if(isset($_SESSION)==['username']){
// $_SESSION['username']='Ram';
// $_SESSION['fav-category']='Cars';
// echo "Your session have been saved.";
// }




// $a = 5;
// for ($i=1; $i <= $a; $i++){
//     for ($j=1; $j <= (2*$a)-1; $j++) 
//     { 
//             if ($j >= $a - ($i-1) && $j <= $a + ($i-1)) {
//                 echo "*";
//             } else {
//                 echo "&nbsp;&nbsp;";
//             }
//     } 
//     echo "<br>";

// }

// $pic = -9223372036854775809;
// var_dump($pic);

// $three_dimensional = array(array(array("Ferrari", "Lamberghini")),array(array("Honda", "Apache")),array(array("Electric", "Fuel-based")));
// echo $three_dimensional [0][0][1];

?>