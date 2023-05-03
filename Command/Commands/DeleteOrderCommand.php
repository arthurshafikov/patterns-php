<?php

namespace Commands;

use Services\OrderService;

class DeleteOrderCommand extends OrderCommand
{
    public function execute(int $id)
    {
        $this->orderService->delete($id);
    }
}
