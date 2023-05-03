<?php

namespace Commands;

use Services\OrderService;

abstract class OrderCommand
{
    public function __construct(protected readonly OrderService $orderService)
    {
    }
}
