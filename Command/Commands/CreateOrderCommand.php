<?php

namespace Commands;

use Services\OrderService;

class CreateOrderCommand extends OrderCommand
{
    public function execute(array $params)
    {
        $this->orderService->create($params);
    }
}
