<?php

namespace Iterators;

use LinkedList\Node;

class LuxDineMenuIterator implements Iterator
{
    public function __construct(protected ?Node $lastMenuItemNode)
    {
    }

    public function hasNext(): bool
    {
        return !is_null($this->lastMenuItemNode);
    }

    public function next(): object
    {
        $currentNodeMenuItemData = $this->lastMenuItemNode->getData();

        $this->lastMenuItemNode = $this->lastMenuItemNode->getNext();

        return $currentNodeMenuItemData;
    }
}
