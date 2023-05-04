<?php

namespace Dispatchers;

use Vehicles\Vehicle;

class BoeingDispatcher implements Dispatcher
{
    public function handle(Vehicle $vehicle, string $event): void
    {
        echo "Handling boeing #{$vehicle->getBortNumber()} $event event...\n";
    }
}
