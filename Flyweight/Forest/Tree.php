<?php

namespace Forest;

use Exception;

class Tree
{
    public function __construct(
        protected readonly int $x,
        protected readonly int $y,
        protected readonly TreeType $treeType,
    ) {
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function getTreeType(): TreeType
    {
        return $this->treeType;
    }

    public function __call(string $name, array $arguments)
    {
        if (method_exists($this->treeType, $name)) {
            return $this->treeType->$name($arguments);
        }

        throw new Exception("Method $name doesn't exist in Tree");
    }
}
