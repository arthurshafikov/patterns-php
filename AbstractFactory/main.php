<?php

use Factories\ArDeco\FurnitureFactory as ArDecoFurnitureFactory;
use Factories\Victorian\FurnitureFactory as VictorianFurnitureFactory;
use Factories\Modern\FurnitureFactory as ModernFurnitureFactory;
use Interfaces\AbstractFurnitureFactory;

require 'autoloader.php';

const AR_DECO_FURNITURE_TYPE = "arDeco";
const VICTORIAN_FURNITURE_TYPE = "victoriann";
const MODERN_FURNITURE_TYPE = "modern";

function getFurnitureFactory(string $configSetting): AbstractFurnitureFactory {
    return match($configSetting) {
        AR_DECO_FURNITURE_TYPE => new ArDecoFurnitureFactory,
        VICTORIAN_FURNITURE_TYPE => new VictorianFurnitureFactory,
        MODERN_FURNITURE_TYPE => new ModernFurnitureFactory,
    };
}

$furnitureFactory = getFurnitureFactory(AR_DECO_FURNITURE_TYPE);

$chair = $furnitureFactory->createChair();
$chair->sitOn();

$table = $furnitureFactory->createTable();
$table->eatAt();

$sofa = $furnitureFactory->createSofa();
$sofa->sleepOn();
