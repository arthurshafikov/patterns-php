<?php

namespace Builders;

use Houses\House;
use Interfaces\Builder;

class SuburbHouseBuilder implements Builder
{
    public function __construct(private readonly House $house)
    {
    }

    public function buildWalls(): void
    {
        $this->house->hasWalls = true;
    }

    public function buildDoors(int $numberOfDoors): void
    {
        $this->house->numberOfDoors = $numberOfDoors;
    }

    public function buildWindows(int $numberOfWindows): void
    {
        $this->house->numberOfWindows = $numberOfWindows;
    }

    public function buildRoof(): void
    {
        $this->house->hasRoof = true;
    }

    public function buildGarage(): void
    {
        $this->house->hasGarage = true;
    }

    public function buildSwimmingPool(): void
    {
        $this->house->hasSwimmingPool = true;
    }

    public function getResult(): House
    {
        return $this->house;
    }
}
