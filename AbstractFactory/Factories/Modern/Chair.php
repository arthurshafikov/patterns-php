<?php

namespace Factories\Modern;

use Interfaces\AbstractChair;

class Chair implements AbstractChair
{
    public function hasLegs(): bool
    {
        return true;
    }

    public function sitOn(): void
    {
        echo "Sitting on Modern chair!\n";
    }
}
