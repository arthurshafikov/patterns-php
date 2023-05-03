<?php

use Commands\CreateOrderCommand;
use Commands\DeleteOrderCommand;
use Services\OrderService;

require 'autoloader.php';

$orderService = new OrderService;

$createOrderCommand = new CreateOrderCommand($orderService);
$deleteOrderCommand = new DeleteOrderCommand($orderService);

$createOrderCommand->execute([]);
$deleteOrderCommand->execute(12);
