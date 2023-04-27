<?php

namespace Factories\Victorian;

use Interfaces\AbstractChair;
use Interfaces\AbstractFurnitureFactory;
use Interfaces\AbstractSofa;
use Interfaces\AbstractTable;

class FurnitureFactory implements AbstractFurnitureFactory
{
    public function createChair(): AbstractChair
    {
        return new Chair;
    }

    public function createTable(): AbstractTable
    {
        return new Table;
    }

    public function createSofa(): AbstractSofa
    {
        return new Sofa;
    }
}
