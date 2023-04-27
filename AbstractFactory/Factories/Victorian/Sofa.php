<?php

namespace Factories\Victorian;

use Interfaces\AbstractSofa;

class Sofa implements AbstractSofa
{
    public function sleepOn(): void
    {
        echo "Sleeping of Victorian sofa zzzz...\n";
    }
}
