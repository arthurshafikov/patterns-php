<?php

namespace Listeners;

class NotifyUserRegistration implements Listener
{
    public function handle($data): void
    {
        echo "Sending an email to user with his registration data...\n";
    }
}
