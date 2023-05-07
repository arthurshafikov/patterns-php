<?php

namespace Visitor;

use Shapes\Circle;
use Shapes\CompoundShape;
use Shapes\Dot;
use Shapes\Rectangle;

interface Visitor
{
    public function visitDot(Dot $shape): void;
    public function visitCircle(Circle $shape): void;
    public function visitRectangle(Rectangle $shape): void;
    public function visitCompoundShape(CompoundShape $shape): void;
}
