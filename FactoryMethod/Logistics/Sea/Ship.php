<?php

namespace Logistics\Sea;

use Interfaces\Transport;

class Ship implements Transport
{
    public function deliver(): void
    {
        echo "Delivering by sea...\n";
    }
}
