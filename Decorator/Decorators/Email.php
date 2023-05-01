<?php

namespace Decorators;

class Email extends BaseDecorator
{
    protected function afterParentSent(): void
    {
        echo "Sending an email...\n";
    }
}
