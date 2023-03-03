<?php 
trait text1{
    public function txt1(){
        echo "Hello";
    }
}
trait text2{
    public function txt2(){
        echo "Hi";
    }
}

class Greeting1{
    use text1;
}
class Greeting2{
    use text1,text2;
}
$first= new Greeting1();
$first->txt1();
echo "<br>";




$second= new Greeting2();
$second->txt2();
$second->txt1();
echo "<br>";

?>