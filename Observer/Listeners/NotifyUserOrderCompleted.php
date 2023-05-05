<?php

namespace Listeners;

class NotifyUserOrderCompleted implements Listener
{
    public function handle($data): void
    {
        echo "Sending an email to user informing that his order has been completed...\n";
    }
}
