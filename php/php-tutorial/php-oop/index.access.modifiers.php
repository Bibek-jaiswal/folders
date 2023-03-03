<?php 
class Car{
    public $name;
    public $color;
    public $comfort;

    function __construct($name,$color){
        $this->name = $name;
        $this->color = $color;

    }

    function __destruct()
    {
        echo "The name of the car is {$this->name} and the color is {$this->color} ";
        echo "<br>";
    }

}

class Ferrari extends Car{
   public function text(){
        echo "This extends car. ";
    }
}

$ford = new car ("Ford", "Red");
$Toyota = new car ("Toyota", "White");
$ferrari = new Ferrari ("Ferrari", "Black");
$ferrari->text();
echo "<br>";


?> 
