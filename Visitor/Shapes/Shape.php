<?php

namespace Shapes;

use Visitor\Visitor;

interface Shape
{
    public function move(int $x, int $y): void;
    public function draw(int $x, int $y): void;
    public function accept(Visitor $v): void;

}
