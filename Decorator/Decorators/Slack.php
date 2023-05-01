<?php

namespace Decorators;

class Slack extends BaseDecorator
{
    protected function afterParentSent(): void
    {
        echo "Sending through Slack...\n";
    }
}
