<?php

namespace Products;

class Hammer implements Component
{
    public function getCost(): int
    {
        return 10;
    }
}
