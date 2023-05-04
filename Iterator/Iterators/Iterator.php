<?php

namespace Iterators;

interface Iterator
{
    public function hasNext(): bool;
    public function next(): object;
}
