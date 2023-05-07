<?php

use Shapes\Circle;
use Shapes\CompoundShape;
use Shapes\Dot;
use Shapes\Rectangle;
use Visitor\XMLExportVisitor;

require 'autoloader.php';

$xmlExportVisitor = new XMLExportVisitor();

$dot = new Dot();
$dot->accept($xmlExportVisitor);

$circle = new Circle();
$circle->accept($xmlExportVisitor);

$rectangle = new Rectangle();
$rectangle->accept($xmlExportVisitor);

$compoundShape = new CompoundShape();
$compoundShape->accept($xmlExportVisitor);
/*
Exporting dot parameters...
Exporting circle parameters...
Exporting rectangle parameters...
Exporting compound shape parameters...
*/
