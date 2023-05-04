<?php

namespace Menu;

use Iterators\CafeInnMenuIterator;
use Iterators\Iterator;

class CafeInnMenu implements Menu
{
    private array $menuItems = [];

    function __construct()
    {
        $this->menuItems[] = new MenuItem('Espresso', 5);
        $this->menuItems[] = new MenuItem('Hot Mocha', 6);
        $this->menuItems[] = new MenuItem('Cappuccino', 4.5);
        $this->menuItems[] = new MenuItem('Signature Sandwich', 8);
        $this->menuItems[] = new MenuItem('Special Salad', 5);
    }

    public function createIterator(): Iterator
    {
        return new CafeInnMenuIterator($this->menuItems);
    }
}
