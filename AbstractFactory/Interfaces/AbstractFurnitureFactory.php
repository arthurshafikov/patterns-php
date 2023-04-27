<?php

namespace Interfaces;

interface AbstractFurnitureFactory
{
    public function createChair(): AbstractChair;
    public function createTable(): AbstractTable;
    public function createSofa(): AbstractSofa;
}
