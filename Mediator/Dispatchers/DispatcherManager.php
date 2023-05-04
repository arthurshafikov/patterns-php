<?php

namespace Dispatchers;

use Exception;
use ReflectionClass;
use Vehicles\Vehicle;

class DispatcherManager
{
    public function notify(Vehicle $vehicle, string $event): void
    {
        $baseClass = (new ReflectionClass($vehicle))->getShortName();

        $methodName = "create{$baseClass}Dispatcher";

        if (method_exists($this, $methodName)) {
            $this->$methodName()->handle($vehicle, $event);
        } else {
            throw new Exception("Dispatcher for $baseClass not defined.");
        }
    }

    public function createPlaneDispatcher(): Dispatcher
    {
        return new PlaneDispatcher();
    }

    public function createHelicopterDispatcher(): Dispatcher
    {
        return new HelicopterDispatcher();
    }

    public function createBoeingDispatcher(): Dispatcher
    {
        return new BoeingDispatcher();
    }
}
