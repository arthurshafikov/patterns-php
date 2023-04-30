<?php

namespace Products;

class Charge implements Component
{
    public function getCost(): int
    {
        return 5;
    }
}
