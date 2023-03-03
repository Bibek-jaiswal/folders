<h1>json_encode</h1>
<?php 
// Json_encode used to encode value into JSON format


$experience = array("Ram"=>5,"Shyam"=>4,"Hari"=>6);
echo json_encode($experience);
// the value will be inside curlybrackets{} coz the key is only under double quotes nut the value is not in quotes in the array

echo "<br>";
$experience_1 = array("Ram=>5","Shyam=>4","Hari=>6");
echo json_encode($experience_1);
// now the values of the array will be inside big brackets[] coz the key and value both r inside quotes""
echo "<br>";


$cars = array("Ford", "Toyota","Renault");
echo json_encode($cars);

echo "<br>";
?>
<h1>json_decode</h1>
<h2>JSON to PHP object</h2>
<?php
// json_decode used to decodea JSON object into PHPobject or an associative array.


// PHP object

$object1 = '{"Ford":4, "Toyota":3, "Renault":7}';
var_dump(json_decode($object1));

echo "<br>";


?>
<h2>JSON to PHP associative array</h2>
<?php

// Associative array for this a in second parameter of json_decode true should be put

$arr_obj = '{"Cars":5, "Bike":4, "Cycle":10}';
var_dump(json_decode($arr_obj,true));



?>

<h2>Accessing decoded values form a PHP object</h2>

<?php

$object1 = '{"Ford":4, "Toyota":3, "Renault":7}';

$obj = json_decode($object1);

echo $obj->Ford;
echo "<br>";

echo $obj->Toyota;
echo "<br>";

echo $obj->Renault;
echo "<br>";


?>
<h2>Accessing decoded values form a PHP associative array</h2>
<?php 

$arr_obj = '{"Cars":5, "Bike":4, "Cycle":10}';

$obj_arr =json_decode($arr_obj,true);
echo $obj_arr["Cars"];
echo "<br>";

echo $obj_arr["Bike"];
echo "<br>";

echo $obj_arr["Cycle"];
echo "<br>";


?>

<h2>Looping through the values</h2>
<h3>Looping through PHP object</h3>
<?php
$object1 = '{"Ford":4, "Toyota":3, "Renault":7}';

$obj = json_decode($object1);

foreach ($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

?>




<h3>Looping through PHP associative array</h3>
<?php 
$arr_obj_1 = '{"Cars":5, "Bike":4, "Cycle":10}';

$obj_arr_1 =json_decode($arr_obj,true);

foreach ($obj_arr_1 as $key => $value) {
    echo $key . " => " . $value . "<br>";
}


?>