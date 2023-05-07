<?php

namespace Visitor;

use Shapes\Circle;
use Shapes\CompoundShape;
use Shapes\Dot;
use Shapes\Rectangle;

class XMLExportVisitor implements Visitor
{
    public function visitDot(Dot $shape): void
    {
        echo "Exporting dot parameters...\n";
    }

    public function visitCircle(Circle $shape): void
    {
        echo "Exporting circle parameters...\n";
    }

    public function visitRectangle(Rectangle $shape): void
    {
        echo "Exporting rectangle parameters...\n";
    }

    public function visitCompoundShape(CompoundShape $shape): void
    {
        echo "Exporting compound shape parameters...\n";
    }
}
