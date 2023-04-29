<?php

use Fahrenheit\Fahrenheit;
use Fahrenheit\FahrenheitAdapter;
use Libraries\Celsius;
use Libraries\WaterBoilIndicator;

require 'autoloader.php';

$celsius = new Celsius(70);
$fahrenheit = new Fahrenheit(300);

$waterBoilIndicator = new WaterBoilIndicator;
$waterBoiledDefault = $waterBoilIndicator->isWaterBoiled($celsius);

// we can't do that
//$waterBoiled = $waterBoilIndicator->isWaterBoiled($fahrenheit);

// but we can
$fahrenheitAdapter = new FahrenheitAdapter($fahrenheit);
$waterBoiledWithAdapter = $waterBoilIndicator->isWaterBoiled($fahrenheitAdapter);

echo sprintf("Is water boiled in Celsius? %s.\n", $waterBoiledDefault ? "Yes" : "No");
echo sprintf("Is water boiled in Fahrenheit? %s.\n", $waterBoiledWithAdapter ? "Yes" : "No");

/*
WaterBoilIndicator: received temperature: 70 °C
WaterBoilIndicator: received temperature: 149 °C
Is water boiled in Celsius? No.
Is water boiled in Fahrenheit? Yes.
*/
