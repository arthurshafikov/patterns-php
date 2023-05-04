<?php

namespace Dispatchers;

use Vehicles\Vehicle;

interface Dispatcher
{
    public function handle(Vehicle $vehicle, string $event): void;
}
