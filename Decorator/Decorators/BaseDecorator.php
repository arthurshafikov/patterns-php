<?php

namespace Decorators;

abstract class BaseDecorator
{
    public function __construct(protected readonly ?BaseDecorator $parentDecorator = null)
    {
    }

    final public function send(): void {
        $this->parentDecorator?->send();
        $this->afterParentSent();
    }

    abstract protected function afterParentSent(): void;
}
