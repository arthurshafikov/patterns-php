<?php

namespace Menu;

use Iterators\Iterator;

interface Menu
{
    public function createIterator(): Iterator;
}
