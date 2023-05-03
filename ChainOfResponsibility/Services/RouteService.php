<?php

namespace Services;

use Middlewares\AuthMiddleware;
use Middlewares\HasEnoughBalanceMiddleware;
use Middlewares\ProductExistsMiddleware;
use Middlewares\ProductIsInStockMiddleware;
use Models\User;

// this is router...
class RouteService
{
    public function __construct(protected readonly ShopService $shopService)
    {
    }

    public function buyProduct(User $user, string $product): void
    {
        // here is the chain of responsibility
        $productIsInStockMiddleware = new ProductIsInStockMiddleware();
        $hasEnoughBalanceMiddleware = new HasEnoughBalanceMiddleware($productIsInStockMiddleware);
        $productExistsMiddleware = new ProductExistsMiddleware($hasEnoughBalanceMiddleware);
        $authMiddleware = new AuthMiddleware($productExistsMiddleware);

        if ($authMiddleware->handle($user, $product)) {
            $this->shopService->setBuyer($user)->buy($product);
        }
    }
}
