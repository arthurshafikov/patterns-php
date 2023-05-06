<?php

use Navigators\Navigator;
use Strategies\PublicTransportStrategy;
use Strategies\RoadStrategy;
use Strategies\WalkingStrategy;

require 'autoloader.php';

$roadStrategy = new RoadStrategy;
$walkingStrategy = new WalkingStrategy;
$publicTransportStrategy = new PublicTransportStrategy;

$navigator = new Navigator($roadStrategy);

$coordinatesA = '41.40338, 2.17403';
$coordinatesB = '40.40338, 2.50128';
echo $navigator->buildRoute($coordinatesA, $coordinatesB);

echo $navigator->setRouteStrategy($walkingStrategy)->buildRoute($coordinatesA, $coordinatesB);

echo $navigator->setRouteStrategy($publicTransportStrategy)->buildRoute($coordinatesA, $coordinatesB);

/*
You need to ride down the X road, stop near the Y church...
You need to go up the X hill, walking by the Y waterfall and stop near the Z church...
You need to use the X bus, you can get in it at Y in the town, then ride until the stop near the Z church...
*/
