<?php

namespace Middlewares;

use Models\User;
use Services\ShopService;

class ProductIsInStockMiddleware extends Middleware
{
    public function handleCheck(User $user, string $product): bool
    {
        echo "Checking product is in stock...\n";

        $productIsInStock = ShopService::PRODUCTS_STOCK[$product] > 0;
        if (!$productIsInStock) {
            echo "Error! Product is out of stock!\n";
        }

        return $productIsInStock;
    }
}
