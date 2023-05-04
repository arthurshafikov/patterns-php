<?php

namespace Dispatchers;

use Vehicles\Vehicle;

class HelicopterDispatcher implements Dispatcher
{
    public function handle(Vehicle $vehicle, string $event): void
    {
        echo "Handling helicopter #{$vehicle->getBortNumber()} $event event...\n";
    }
}
