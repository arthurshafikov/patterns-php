<?php

use Dispatchers\DispatcherManager;
use Vehicles\Boeing;
use Vehicles\Helicopter;
use Vehicles\Plane;

require 'autoloader.php';

$dispatcher = new DispatcherManager();

$plane = new Plane($dispatcher, 28911);
$boeing = new Boeing($dispatcher, 40291);
$helicopter = new Helicopter($dispatcher, 19920);

$plane->prepareToTakeOff();
$boeing->prepareToTakeOff();
$helicopter->prepareToTakeOff();

// after a while...
$plane->prepareToLand();
$boeing->prepareToLand();
$helicopter->prepareToLand();

/*
Handling plane #28911 takeoff event...
Handling boeing #40291 takeoff event...
Handling helicopter #19920 takeoff event...
Handling plane #28911 land event...
Handling boeing #40291 land event...
Handling helicopter #19920 land event...
*/
