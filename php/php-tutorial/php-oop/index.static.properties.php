<?php 
class Message{
    public static $greet = "Namaste";
    public function greeting(){
       return self::$greet;
    }
}
// class Gesture extends Message{
//     public function gesture(){
//         return parent::$greet;
//     }
// }



// echo Gesture::$greet;
// echo "<br>";
// $a = new Gesture;
// echo $a->gesture();
// echo "<br>";


$hello = new Message;
echo $hello->greeting();
?>