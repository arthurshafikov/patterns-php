<?php

namespace Interfaces;

abstract class AbstractLogistics
{
    public function planDelivery(): void
    {
        echo "Planning delivery...\n";
        $this->createTransport()->deliver();
        echo "Delivered successfully!\n";
    }

    abstract protected function createTransport(): Transport;
}
