<?php
interface Resizable {
    public function resize($percentage);
}

class Rectangle implements Resizable {
    private $width;
    private $length;

    public function __construct($width, $length) {
        $this->width = $width;
        $this->length = $length;
    }

    public function resize($percentage) {
        $this->width *= $percentage / 100;
        $this->length *= $percentage / 100;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getlength() {
        return $this->length;
    }
}

$rectangle = new Rectangle(6,9);
echo "Before resizing - Width: " . $rectangle->getWidth() . ", length: " . $rectangle->getlength() . "\n";

$rectangle->resize(300);
echo "After resizing - Width: " . $rectangle->getWidth() . ", length: " . $rectangle->getlength() . "\n";
?>