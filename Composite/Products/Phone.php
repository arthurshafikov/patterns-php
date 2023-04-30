<?php

namespace Products;

class Phone implements Component
{
    public function getCost(): int
    {
        return 50;
    }
}
