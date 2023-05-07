<?php

namespace Shapes;

use Visitor\Visitor;

class CompoundShape implements Shape
{
    public function move(int $x, int $y): void
    {
    }

    public function draw(int $x, int $y): void
    {
    }

    public function accept(Visitor $v): void
    {
        $v->visitCompoundShape($this);
    }
}
