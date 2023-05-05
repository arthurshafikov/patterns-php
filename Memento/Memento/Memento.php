<?php

namespace Memento;

class Memento
{
    public function __construct(protected readonly array $state)
    {
    }

    public function getState(): array
    {
        return $this->state;
    }
}
