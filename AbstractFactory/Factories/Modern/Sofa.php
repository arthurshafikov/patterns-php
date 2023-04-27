<?php

namespace Factories\Modern;

use Interfaces\AbstractSofa;

class Sofa implements AbstractSofa
{
    public function sleepOn(): void
    {
        echo "Sleeping of Modern sofa zzzz...\n";
    }
}
