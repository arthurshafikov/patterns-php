<?php

namespace Libraries;

// THIS CODE IS UNCHANGEABLE TO US, THIS IS LIBRARY CODE!

class Celsius
{
    public function __construct(protected readonly int $temperature)
    {
    }

    public function getTemperature(): int
    {
        return $this->temperature;
    }
}
