<?php

namespace Decorators;

class SMS extends BaseDecorator
{
    protected function afterParentSent(): void
    {
        echo "Sending an SMS...\n";
    }
}
