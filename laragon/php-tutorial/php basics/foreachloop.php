<?php 

// function movies(iterable $movies){
//     foreach ($movies as $item){
//         echo $item;
//     echo "<br>";

//     }
// }
// $movies = [
//     "name" => "Pathaan",
//     "genre" => "Action",
//     "duration" => "2hrs 40min",
//     "reviews" =>"4.8/5"
// ];

// movies($movies);

// echo "Name = " . $movies['name'];
// echo "<br>";

// echo "Genre = " . $movies['genre'];
// echo "<br>";

// echo "Duration = " . $movies['duration'];
// echo "<br>";

// echo "Reviews = " . $movies['reviews'];
// echo "<br>";




?>
<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo"=>3, "BMW"=>4, "Toyota"=>5);

echo json_encode($cars);
?>

</body>
</html>
<br>
<br>
<br>
<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
?>

</body>
</html>