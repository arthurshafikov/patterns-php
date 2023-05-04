<?php

namespace Dispatchers;

use Vehicles\Vehicle;

class PlaneDispatcher implements Dispatcher
{
    public function handle(Vehicle $vehicle, string $event): void
    {
        echo "Handling plane #{$vehicle->getBortNumber()} $event event...\n";
    }
}
