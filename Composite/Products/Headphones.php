<?php

namespace Products;

class Headphones implements Component
{
    public function getCost(): int
    {
        return 20;
    }
}
