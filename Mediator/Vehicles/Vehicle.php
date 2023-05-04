<?php

namespace Vehicles;

use Dispatchers\DispatcherManager;

abstract class Vehicle
{
    public function __construct(protected readonly DispatcherManager $dispatcher, protected readonly int $bortNumber)
    {
    }

    public function getBortNumber(): int
    {
        return $this->bortNumber;
    }
}
