<?php

use Builders\CottageBuilder;
use Builders\SuburbHouseBuilder;
use Directors\BuilderDirector;
use Houses\House;

require 'autoloader.php';

$suburbHouseBuilder = new SuburbHouseBuilder(new House);
$director = new BuilderDirector($suburbHouseBuilder);
$suburbHouse = $director->make(BuilderDirector::AVERAGE_BUILDING_TYPE);

echo $suburbHouse;
/*
    House info:
    Walls: Yes
    Doors: 2
    Windows: 6
    Roof: Yes
    Garage: Yes
    Swimming pool: No
 */
$cottageBuilder = new CottageBuilder(new House);
$director->setBuilder($cottageBuilder);
$cottage = $director->make(BuilderDirector::RICH_BUILDING_TYPE);

echo $cottage;
/*
    House info:
    Walls: Yes
    Doors: 3
    Windows: 8
    Roof: Yes
    Garage: Yes
    Swimming pool: Yes
*/
