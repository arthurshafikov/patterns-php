<?php

namespace Factories\ArDeco;

use Interfaces\AbstractSofa;

class Sofa implements AbstractSofa
{
    public function sleepOn(): void
    {
        echo "Sleeping of ArDeco sofa zzzz...\n";
    }
}
