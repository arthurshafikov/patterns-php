<?php

namespace Fahrenheit;

class Fahrenheit
{
    public function __construct(protected readonly int $temperature)
    {
    }

    public function getTemperature(): int
    {
        return $this->temperature;
    }
}
