<?php

namespace Vehicles;

class Plane extends Vehicle
{
    public function prepareToTakeOff()
    {
        $this->dispatcher->notify($this, "takeoff");
    }

    public function prepareToLand()
    {
        $this->dispatcher->notify($this, "land");
    }
}
