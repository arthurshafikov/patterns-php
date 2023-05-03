<?php

namespace Middlewares;

use Models\User;
use Services\ShopService;

class HasEnoughBalanceMiddleware extends Middleware
{
    public function handleCheck(User $user, string $product): bool
    {
        echo "Checking user has enough balance...\n";

        $hasEnoughBalance = $user->getBalance() >= ShopService::PRODUCTS_COST[$product];
        if (!$hasEnoughBalance) {
            echo "Error! User has not enough balance!\n";
        }

        return $hasEnoughBalance;
    }
}
