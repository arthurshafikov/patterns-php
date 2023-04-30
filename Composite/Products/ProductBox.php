<?php

namespace Products;

class ProductBox implements Component
{
    public function __construct(protected readonly array $contents)
    {
    }

    public function getCost(): int
    {
        return array_reduce($this->contents, function ($carry, $content) {
            return $carry + $content->getCost();
        }, 0);
    }
}
