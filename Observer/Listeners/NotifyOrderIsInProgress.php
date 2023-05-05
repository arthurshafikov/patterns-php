<?php

namespace Listeners;

class NotifyOrderIsInProgress implements Listener
{
    public function handle($data): void
    {
        echo "Sending an email to user informing that his order is in progress...\n";
    }
}
