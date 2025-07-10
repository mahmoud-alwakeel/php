<?php

class Shape
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function rotate(int $degree)
    {
        $angle = 0;
        $new_angle = $angle + $degree;
        return $new_angle % 360;
    }

    public function playSound()
    {
        echo "play sound..." . $this->name . "\n";
    }
}

class Square extends Shape {
    protected $name = "Square";

    // Polymorphism (overloading)
    public function __construct()
    {
        // here we override the constructor
    }

    // we can't overload methods but we can override it
    public function playSound()
    {
        echo "Play sound for Specific shape" . $this->name . "\n";
    }
}

class Triangle extends Shape {
    protected $name = "Triangle";

    // Polymorphism (overloading)
    public function __construct()
    {
        // here we override the constructor
    }

    // we can't overload methods but we can override it
    public function playSound()
    {
        echo "Play sound for Specific shape" . $this->name . "\n";
    }
}

class Amoeba extends Shape {
    protected $name = "Amoeba";
    private $x;
    private $y;

    // Polymorphism (overloading)
    public function __construct($x, $y)
    {
        // here we override the constructor
        $this->x = $x;
        $this->y = $y;
    }

    public function rotate($degree) {
        $angle = 0;
        $distanceFromOrigin = sqrt($this->x ** 2 + $this->y ** 2);
        $rotationInfluence = $distanceFromOrigin / 10;
        $randomFactor = rand(-10, 10);

        $new_angle = $angle + $degree + $rotationInfluence + $randomFactor;
        return $new_angle % 360;
    }
}


$circle = new Shape("circle");
$square = new Square("square");
$triangle = new Triangle("Triangle");
$amoeba = new Amoeba(10, 50);

echo $circle->rotate(90) . "\n";
$circle->playSound();

echo $square->rotate(90) . "\n";
$square->playSound();

echo $triangle->rotate(90) . "\n";
$triangle->playSound();

echo $amoeba->rotate(90) . "\n";
$amoeba->playSound();