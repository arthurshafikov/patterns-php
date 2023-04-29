<?php

namespace Fahrenheit;

use Libraries\Celsius;

class FahrenheitAdapter extends Celsius
{
    public function __construct(private readonly Fahrenheit $fahrenheit)
    {
        parent::__construct(0); // useless constructor
    }

    public function getTemperature(): int
    {
        return round(($this->fahrenheit->getTemperature()-32) * 5 / 9);
    }
}
