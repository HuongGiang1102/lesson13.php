<?php
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meoooooo";
    }
}

$dog = new Dog();
echo " Dog: ";
$dog->makeSound();

$cat = new Cat();
echo " Cat: ";
$cat->makeSound();
?>
