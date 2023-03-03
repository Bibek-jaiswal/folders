<?php 

class name{
    public static function boys(){
        echo "Hello people";
    }
    public function __construct(){
        self::boys();
    }


}

// class girls{
//     public function msg(){
//         name::boys();
//     }
// }


name::boys();

echo "<br>";
new name(); 
echo "<br>";
  
class movie{
    protected static function categories(){
        return "suspense thriller movie.";
    }
}
class comedy extends movie{
    public $movie_name;
    public function __construct(){
        $this->movie_name = parent ::categories();
    }
}
$ratsasan = new comedy;
echo $ratsasan->movie_name;



?>