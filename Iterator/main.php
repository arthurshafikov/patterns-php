<?php

use Menu\CafeInnMenu;
use Menu\LuxDineMenu;
use Iterators\Iterator;

require 'autoloader.php';

$cafeInnMenuIterator = (new CafeInnMenu)->createIterator();
$luxDineMenuIterator = (new LuxDineMenu)->createIterator();

printMenu($cafeInnMenuIterator);
printMenu($luxDineMenuIterator);

function printMenu(Iterator $iterator): void {
    while($iterator->hasNext()) {
        $item = $iterator->next();
        echo('Item Name: '.$item->getName().PHP_EOL);
        echo('Item Price: '.'$'.$item->getPrice().PHP_EOL);
    }
}

/*
Item Name: Espresso
Item Price: $5
Item Name: Hot Mocha
Item Price: $6
Item Name: Cappuccino
Item Price: $4
Item Name: Signature Sandwich
Item Price: $8
Item Name: Special Salad
Item Price: $5
Item Name: Huge Steak
Item Price: $15
Item Name: Nachos
Item Price: $3
Item Name: Sour Chicken
Item Price: $25
Item Name: Smoked Fish
Item Price: $25
Item Name: The Original Burger
Item Price: $8
Item Name: Turkey Wrap
Item Price: $6
*/
