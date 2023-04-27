<?php

namespace Factories\ArDeco;

use Interfaces\AbstractTable;

class Table implements AbstractTable
{
    public function isRound(): bool
    {
        return false;
    }

    public function eatAt(): void
    {
        echo "Eating at ArDeco table!\n";
    }
}
