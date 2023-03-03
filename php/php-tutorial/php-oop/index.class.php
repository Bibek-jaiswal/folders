<!DOCTYPE html>
<html lang="en">

<body>
    <?php
    class  car{

        public $name;
        public $color;

        // function set_name($name){
        //     $this->name = $name;
        // }
        // function set_color($color){
        //     $this->color =$color;
        // }

        function __construct($name,$color="pink")
        {
            $this->name = $name;
            $this->color =$color;
            
        }


        // function get_name(){
        //     return $this->name;
        // }
        // function get_color(){
        //     return $this->color;

        // }

        function __destruct()
        {
            echo "This car is  {$this->name} and the color is {$this->color}.";
            echo "<br>";
        }

    }

    $ford = new car("Ford", "red");

    // $ford->set_name('Ford');
    // $ford->set_color('red');
    // echo "Name = " . $ford->get_name();
    // echo"<br>";
    // echo "Color = " . $ford->get_color();
    // echo"<br>";
    // echo"<br>";




    $toyota = new car("Toyota", "White");
    $ferrari = new car("Ferrari");
    // $toyota->set_name('Toyota');
    // $toyota->set_color('White');
    // echo "Name = " . $toyota->get_name();
    // echo"<br>";
    // echo "Color = " . $toyota->get_color();
    // echo"<br>";







    ?>











</body>
</html>