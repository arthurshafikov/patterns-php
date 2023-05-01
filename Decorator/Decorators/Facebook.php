<?php

namespace Decorators;

class Facebook extends BaseDecorator
{
    protected function afterParentSent(): void
    {
        echo "Sending through Facebook...\n";
    }
}
