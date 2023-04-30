<?php

use Products\Charge;
use Products\Hammer;
use Products\Headphones;
use Products\Phone;
use Products\ProductBox;

require 'autoloader.php';

$insideBoxWithProducts = new ProductBox([
    new Phone,
    new Headphones,
]);

$insideBoxWithBoxes = new ProductBox([
    new Charge,
    new ProductBox([
        new Phone,
        new Hammer,
    ]),
]);

$mainBox = new ProductBox([
    new Hammer,
    $insideBoxWithProducts,
    $insideBoxWithBoxes,
]);

$cost = $mainBox->getCost();

echo "Order total cost is $cost\n";

/*
    Order total cost is 145

    P.S. Phone (50) + Headphones (20) + Charge (5) + Phone (50) + Hammer (10) + Hammer (10) = 145
*/
