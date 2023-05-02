<?php

use Forest\Forest;
use Forest\TreeTypeFactory;

require 'autoloader.php';

$forest = new Forest;

$forest->plantTree(1, 1, 'NumberOne', 'Yellow', 'YellowTexture');
$forest->plantTree(2, 2, 'NumberOne', 'Yellow', 'YellowTexture');
$forest->plantTree(4, 4, 'NumberOne', 'Yellow', 'YellowTexture');
$forest->plantTree(5, 5, 'NumberOne', 'Yellow', 'YellowTexture');

$forest->plantTree(6, 6, 'NumberTwo', 'Yellow', 'YellowTexture');

$forest->plantTree(7, 7, 'NumberThree', 'Blue', 'BlueTexture');
$forest->plantTree(8, 8, 'NumberThree', 'Blue', 'BlueTexture');
$forest->plantTree(9, 9, 'NumberThree', 'Blue', 'BlueTexture');
$forest->plantTree(10, 10, 'NumberThree', 'Blue', 'BlueTexture');

$forest->draw();

echo "Tree types length: " . count(TreeTypeFactory::$treeTypes) . "\n";
/*
Tree NumberOne:
Color:Yellow
Texture:YellowTexture
Coordinates: 1, 1

Tree NumberOne:
Color:Yellow
Texture:YellowTexture
Coordinates: 2, 2

Tree NumberOne:
Color:Yellow
Texture:YellowTexture
Coordinates: 4, 4

Tree NumberOne:
Color:Yellow
Texture:YellowTexture
Coordinates: 5, 5

Tree NumberTwo:
Color:Yellow
Texture:YellowTexture
Coordinates: 6, 6

Tree NumberThree:
Color:Blue
Texture:BlueTexture
Coordinates: 7, 7

Tree NumberThree:
Color:Blue
Texture:BlueTexture
Coordinates: 8, 8

Tree NumberThree:
Color:Blue
Texture:BlueTexture
Coordinates: 9, 9

Tree NumberThree:
Color:Blue
Texture:BlueTexture
Coordinates: 10, 10

Tree types length: 3
*/
