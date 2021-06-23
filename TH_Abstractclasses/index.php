<?php
/*abstract class ParentClass {
    abstract public function someMethod1();
    abstract public function someMethod2($name,$color);
    abstract public function someMethod3() : string;
}*/

// Parent class
abstract class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro():string;
}
//Child classes
class Audi extends car {
    public function intro():string{
        return "Choose German quality! I'm an $this->name !";
}
}
class Volvo extends Car {
    public function intro():string{
        return "Proud to be Swedish ! I'm a $this->name !" ;
    }
}
class Citroen extends Car {
    public function intro():string{
        return "french extravagance! I'm a $this->name !";
    }
}

// Creat objects from the child classes
$audi=new Audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo=new Volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen=new citroen("Citroen");
echo $citroen->intro();

?>