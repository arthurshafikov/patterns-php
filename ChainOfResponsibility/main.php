<?php

use Models\User;
use Services\RouteService;
use Services\ShopService;

require 'autoloader.php';

$shopService = (new ShopService());
$router = new RouteService($shopService);

$unauthorizedUser = new User("");
$router->buyProduct($unauthorizedUser, ShopService::HAMMER);
echo "\n\n";

/*
Checking user authorization...
Error! User is unauthorized!
*/

///////////////////////////////////////////////////////////////////////

$userWithoutMoney = new User("userWithoutMoney");
$router->buyProduct($userWithoutMoney, ShopService::HAMMER);
echo "\n\n";

/*
Checking user authorization...
Checking product exists...
Checking user has enough balance...
Error! User has not enough balance!
*/

///////////////////////////////////////////////////////////////////////

$userWithMoney = new User("userWithMoney");
$userWithMoney->addToBalance(99999);
$router->buyProduct($userWithMoney, ShopService::HAMMER);
$router->buyProduct($userWithMoney, ShopService::PHONE);
echo "\n\n";

/*
Checking user authorization...
Checking product exists...
Checking user has enough balance...
Checking product is in stock...
userWithMoney has bought hammer!
Checking user authorization...
Checking product exists...
Checking user has enough balance...
Checking product is in stock...
userWithMoney has bought phone!
*/

///////////////////////////////////////////////////////////////////////

$userWhenProductOutOfStock = new User("userWhenProductOutOfStock");
$userWhenProductOutOfStock->addToBalance(99999);
$router->buyProduct($userWhenProductOutOfStock, ShopService::HEADPHONES);

/*
Checking user authorization...
Checking product exists...
Checking user has enough balance...
Checking product is in stock...
Error! Product is out of stock!
*/
