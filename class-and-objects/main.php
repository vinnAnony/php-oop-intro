<?php

class Rectangle
{
    // Declare  properties
    public $length = 0;
    public $width = 0;

    // Method to get the perimeter
    public function getPerimeter()
    {
        return (2 * ($this->length + $this->width));
    }

    // Method to get the area
    public function getArea()
    {
        return ($this->length * $this->width);
    }
}

$rect1 = new Rectangle();
$rect1->length = 30;
$rect1->width = 20;

echo "Length:".$rect1->length . "\n";
echo "Width:".$rect1->width . "\n";

echo "Perimeter:".$rect1->getPerimeter() . "\n";
echo "Area:".$rect1->getArea() . "\n";
