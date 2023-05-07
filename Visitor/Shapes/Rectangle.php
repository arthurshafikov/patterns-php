<?php

namespace Shapes;

use Visitor\Visitor;

class Rectangle implements Shape
{
    public function move(int $x, int $y): void
    {
    }

    public function draw(int $x, int $y): void
    {
    }

    public function accept(Visitor $v): void
    {
        $v->visitRectangle($this);
    }
}
