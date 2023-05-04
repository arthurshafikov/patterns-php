<?php

namespace Vehicles;

class Helicopter extends Vehicle
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
