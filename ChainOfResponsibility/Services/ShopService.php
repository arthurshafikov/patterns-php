<?php

namespace Services;

use Models\User;

class ShopService
{
    public const HAMMER = 'hammer';
    public const PHONE = 'phone';
    public const HEADPHONES = 'headphones';

    public const PRODUCTS = [
        self::HAMMER,
        self::PHONE,
        self::HEADPHONES,
    ];

    public const PRODUCTS_COST = [
        self::HAMMER => 10,
        self::PHONE => 50,
        self::HEADPHONES => 20,
    ];

    public const PRODUCTS_STOCK = [
        self::HAMMER => 2,
        self::PHONE => 1,
        self::HEADPHONES => 0,
    ];

    protected User $buyer;

    public function __construct()
    {
    }

    public function setBuyer(User $user): self
    {
        $this->buyer = $user;

        return $this;
    }

    public function buy(string $product): void
    {
        echo $this->buyer->getUsername() . " has bought $product!\n";
    }
}
