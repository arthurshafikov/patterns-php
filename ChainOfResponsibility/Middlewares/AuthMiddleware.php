<?php

namespace Middlewares;

use Models\User;

class AuthMiddleware extends Middleware
{
    public function handleCheck(User $user, string $product): bool
    {
        echo "Checking user authorization...\n";

        $authorized = $user->getUsername() !== "";
        if (!$authorized) {
            echo "Error! User is unauthorized!\n";
        }

        return $authorized;
    }
}
