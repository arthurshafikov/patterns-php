<?php

namespace Listeners;

class NotifyUserOrderCancelled implements Listener
{
    public function handle($data): void
    {
        echo "Sending an email to user informing that his order has been cancelled...\n";
    }
}
