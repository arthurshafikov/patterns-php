<?php

namespace Factories\Victorian;

use Interfaces\AbstractChair;

class Chair implements AbstractChair
{
    public function hasLegs(): bool
    {
        return true;
    }

    public function sitOn(): void
    {
        echo "Sitting on Victorian chair!\n";
    }
}
