<?php

namespace Logistics\Sea;

use Interfaces\AbstractLogistics;
use Interfaces\Transport;

class Logistics extends AbstractLogistics
{
    protected function createTransport(): Transport
    {
        return new Ship;
    }
}
