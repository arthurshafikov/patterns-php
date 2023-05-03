<?php

namespace Middlewares;

use Models\User;

abstract class Middleware
{
    public function __construct(protected readonly ?Middleware $nextMiddleware = null)
    {
    }

    public function handle(User $user, string $product): bool
    {
        return $this->handleCheck($user, $product)
            && (!$this->nextMiddleware || $this->nextMiddleware->handle($user, $product));
    }

    abstract public function handleCheck(User $user, string $product): bool;
}
