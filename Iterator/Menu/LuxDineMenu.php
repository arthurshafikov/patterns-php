<?php

namespace Menu;

use Iterators\Iterator;
use Iterators\LuxDineMenuIterator;
use LinkedList\Node;

class LuxDineMenu implements Menu
{
    private Node $lastMenuItemNode;

    public function __construct()
    {
        $this->lastMenuItemNode = new Node(new MenuItem('Turkey Wrap', 6.5), null);
        $this->lastMenuItemNode = new Node(new MenuItem('The Original Burger', 8), $this->lastMenuItemNode);
        $this->lastMenuItemNode = new Node(new MenuItem('Smoked Fish', 25), $this->lastMenuItemNode);
        $this->lastMenuItemNode = new Node(new MenuItem('Sour Chicken', 25), $this->lastMenuItemNode);
        $this->lastMenuItemNode = new Node(new MenuItem('Nachos', 3.5), $this->lastMenuItemNode);
        $this->lastMenuItemNode = new Node(new MenuItem('Huge Steak', 15), $this->lastMenuItemNode);
    }

    public function createIterator(): Iterator
    {
        return new LuxDineMenuIterator($this->lastMenuItemNode);
    }
}
