<?php

namespace Libraries;

// THIS CODE IS UNCHANGEABLE TO US, THIS IS LIBRARY CODE!

class WaterBoilIndicator
{
    public function isWaterBoiled(Celsius $celsius): bool
    {
        $temperature = $celsius->getTemperature();
        echo "WaterBoilIndicator: received temperature: $temperature °C\n";

        return $temperature >= 100;
    }
}
