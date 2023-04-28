<?php

namespace Directors;

use Exception;
use Houses\House;
use Interfaces\Builder;

class BuilderDirector
{
    public const SIMPLE_BUILDING_TYPE = "simple";
    public const AVERAGE_BUILDING_TYPE = "average";
    public const RICH_BUILDING_TYPE = "rich";

    public function __construct(private Builder $builder)
    {
    }

    public function setBuilder(Builder $builder): self
    {
        $this->builder = $builder;

        return $this;
    }

    public function make(string $buildingType): House
    {
        $this->builder->buildWalls();
        switch ($buildingType) {
            case self::SIMPLE_BUILDING_TYPE:
                $this->builder->buildDoors(1);
                $this->builder->buildWindows(3);
                break;
            case self::AVERAGE_BUILDING_TYPE:
                $this->builder->buildDoors(2);
                $this->builder->buildWindows(6);
                $this->builder->buildGarage();
                break;
            case self::RICH_BUILDING_TYPE:
                $this->builder->buildDoors(3);
                $this->builder->buildWindows(8);
                $this->builder->buildGarage();
                $this->builder->buildSwimmingPool();
                break;
            default:
                throw new Exception("Wrong buildingType " . $buildingType);
        }
        $this->builder->buildRoof();

        return $this->builder->getResult();
    }
}
