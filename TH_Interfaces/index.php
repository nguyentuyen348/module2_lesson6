<?php
interface Animal{
    public function makeSound();
}

class Cat implements Animal{
    public function makeSound(){
        echo "Meow";
    }
}
Class Dog implements Animal{
    public function makeSound(){
        echo "Wan Wan";
    }
}

$cat=new Cat();
$dog=new Dog();
$animal=array($cat,$dog);

foreach ($animal as $animal){
    $animal->makeSound();
}
?>