<?php

namespace Shapes;

class Circle extends AbstractShape
{
    private int $radius;

    public function getRadius(): int
    {
        return $this->radius;
    }

    public function setRadius(int $radius): self
    {
        $this->radius = $radius;

        return $this;
    }

    public function clone(): AbstractShape
    {
        return (new Circle())
            ->setCoordinates($this->x, $this->y)
            ->setColor($this->color)
            ->setRadius($this->radius);
    }
}
