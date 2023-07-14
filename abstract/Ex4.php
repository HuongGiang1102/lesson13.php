<?php
abstract class Vehicle {
    abstract public function start();
}

class Car extends Vehicle {
    public function start() {
        echo "Car: Started.";
    }
}

class Motorcycle extends Vehicle {
    public function start() {
        echo "Motorcycle: Started.";
    }
}

$car = new Car();
$car->start();

$motorcycle = new Motorcycle();
$motorcycle->start();
?>