<?php

namespace Shapes;

class Rectangle extends AbstractShape
{
    private int $width;
    private int $height;

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function clone(): AbstractShape
    {
        return (new Rectangle())
            ->setCoordinates($this->x, $this->y)
            ->setColor($this->color)
            ->setWidth($this->width)
            ->setHeight($this->height);
    }
}
