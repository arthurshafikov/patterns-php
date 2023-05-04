<?php

namespace Iterators;

class CafeInnMenuIterator implements Iterator
{
    private int $offset = 0;

    public function __construct(protected readonly array $menuItems)
    {
    }

    public function hasNext(): bool
    {
        return array_key_exists($this->offset, $this->menuItems);
    }

    public function next(): object
    {
        return $this->menuItems[$this->offset++];
    }
}
