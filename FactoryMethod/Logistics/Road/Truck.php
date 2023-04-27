<?php

namespace Logistics\Road;

use Interfaces\Transport;

class Truck implements Transport
{
    public function deliver(): void
    {
        echo "Delivering on road...\n";
    }
}
