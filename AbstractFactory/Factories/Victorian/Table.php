<?php

namespace Factories\Victorian;

use Interfaces\AbstractTable;

class Table implements AbstractTable
{
    public function isRound(): bool
    {
        return false;
    }

    public function eatAt(): void
    {
        echo "Eating at Victorian table!\n";
    }
}
