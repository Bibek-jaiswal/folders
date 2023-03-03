<?php 

function movies(iterable $movies){
    foreach ($movies as $item){
        echo $item;
    echo "<br>";

    }
}
$movies = [
    "name" => "Pathaan",
    "genre" => "Action",
    "duration" => "2hrs 40min",
    "reviews" =>"4.8/5"
];

movies($movies);

echo "Name = " . $movies['name'];
echo "<br>";

echo "Genre = " . $movies['genre'];
echo "<br>";

echo "Duration = " . $movies['duration'];
echo "<br>";

echo "Reviews = " . $movies['reviews'];
echo "<br>";

?>