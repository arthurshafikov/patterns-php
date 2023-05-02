<?php

namespace Forest;

class TreeType
{
    public function __construct(
        protected readonly string $name,
        protected readonly string $color,
        protected readonly string $texture
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getTexture(): string
    {
        return $this->texture;
    }
}
