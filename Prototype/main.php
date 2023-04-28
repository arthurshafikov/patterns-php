<?php

use Shapes\Circle;
use Shapes\Rectangle;

require 'autoloader.php';

$shapes = [];

$circle = (new Circle)
    ->setCoordinates(21, 14)
    ->setColor("blue")
    ->setRadius(4);
$shapes[] = $circle;

$rectangle = (new Rectangle)
    ->setCoordinates(8, 26)
    ->setColor("red")
    ->setWidth(12)
    ->setHeight(6);
$shapes[] = $rectangle;

$circlePrototype = $circle->clone()
    ->setCoordinates(2, 3)
    ->setColor("black");
$shapes[] = $circlePrototype;

$rectanglePrototype = $rectangle->clone()
    ->setCoordinates(-4, -10)
    ->setColor("yellow");
$shapes[] = $rectanglePrototype;

$rectanglePrototypePrototype = $rectangle->clone()
    ->setCoordinates(0, 0)
    ->setColor("purple");
$shapes[] = $rectanglePrototypePrototype;

foreach ($shapes as $shape) {
    echo sprintf(
        "Shape: %s\nx,y: %s,%s\ncolor: %s\n\n",
        $shape::class,
        $shape->getX(),
        $shape->getY(),
        $shape->getColor(),
    );
}
/*
    Shape: Shapes\Circle
    x,y: 21,14
    color: blue

    Shape: Shapes\Rectangle
    x,y: 8,26
    color: red

    Shape: Shapes\Circle
    x,y: 2,3
    color: black

    Shape: Shapes\Rectangle
    x,y: -4,-10
    color: yellow

    Shape: Shapes\Rectangle
    x,y: 0,0
    color: purple
*/
