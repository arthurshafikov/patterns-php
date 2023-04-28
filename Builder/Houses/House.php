<?php

namespace Houses;

class House
{
    public bool $hasWalls = false;
    public int $numberOfDoors = 0;
    public int $numberOfWindows = 0;
    public bool $hasRoof = false;
    public bool $hasGarage = false;
    public bool $hasSwimmingPool = false;

    public function __toString(): string
    {
        return sprintf(
            "House info:\nWalls: %s\nDoors: %s\nWindows: %s\nRoof: %s\nGarage: %s\nSwimming pool: %s\n\n",
            $this->hasWalls ? "Yes" : "No",
            $this->numberOfDoors,
            $this->numberOfWindows,
            $this->hasRoof ? "Yes" : "No",
            $this->hasGarage ? "Yes" : "No",
            $this->hasSwimmingPool ? "Yes" : "No",
        );
    }
}
