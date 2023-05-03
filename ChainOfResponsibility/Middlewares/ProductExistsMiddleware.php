<?php

namespace Middlewares;

use Models\User;
use Services\ShopService;

class ProductExistsMiddleware extends Middleware
{
    public function handleCheck(User $user, string $product): bool
    {
        echo "Checking product exists...\n";

        $productExists = in_array($product, ShopService::PRODUCTS);
        if (!$productExists) {
            echo "Error! Product does not exist!\n";
        }

        return $productExists;
    }
}
