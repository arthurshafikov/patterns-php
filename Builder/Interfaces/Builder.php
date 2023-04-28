<?php

namespace Interfaces;

use Houses\House;

interface Builder
{
    public function buildWalls(): void;
    public function buildDoors(int $numberOfDoors): void;
    public function buildWindows(int $numberOfWindows): void;
    public function buildRoof(): void;
    public function buildGarage(): void;
    public function buildSwimmingPool(): void;
    public function getResult(): House;
}
