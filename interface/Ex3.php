<?php
interface Drawable {
    public function draw();
}

class Circle implements Drawable {
    public function draw() {
        echo "Drawing a circle\n";
    }
}

class Square implements Drawable {
    public function draw() {
        echo "Drawing a square\n";
    }
}


$circle = new Circle();
$circle->draw();

$square = new Square();
$square->draw();

?>