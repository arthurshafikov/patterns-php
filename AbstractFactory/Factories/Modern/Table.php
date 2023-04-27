<?php

namespace Factories\Modern;

use Interfaces\AbstractTable;

class Table implements AbstractTable
{
    public function isRound(): bool
    {
        return false;
    }

    public function eatAt(): void
    {
        echo "Eating at Modern table!\n";
    }
}
