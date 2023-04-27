<?php

namespace Logistics\Road;

use Interfaces\AbstractLogistics;
use Interfaces\Transport;

class Logistics extends AbstractLogistics
{
    protected function createTransport(): Transport
    {
        return new Truck;
    }
}
