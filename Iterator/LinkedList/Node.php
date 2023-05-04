<?php

namespace LinkedList;

class Node
{
    public function __construct(protected readonly object $data, protected readonly ?Node $next = null)
    {
    }

    /**
     * @return object
     */
    public function getData(): object
    {
        return $this->data;
    }

    /**
     * @return Node|null
     */
    public function getNext(): ?Node
    {
        return $this->next;
    }
}
