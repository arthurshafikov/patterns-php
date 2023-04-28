<?php

namespace Shapes;

abstract class AbstractShape
{
    protected int $x;
    protected int $y;
    protected string $color;

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function setCoordinates(int $x, int $y): self
    {
        $this->x = $x;
        $this->y = $y;

        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    abstract public function clone(): AbstractShape;
}
