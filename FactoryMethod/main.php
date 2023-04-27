<?php

use Interfaces\AbstractLogistics;
use Logistics\Sea\Logistics as SeaLogistics;
use Logistics\Road\Logistics as RoadLogistics;

require 'autoloader.php';

const SEA_LOGISTICS_TYPE = "sea";
const ROAD_LOGISTICS_TYPE = "road";

function getLogistics(string $configSetting): AbstractLogistics {
    return match($configSetting) {
        SEA_LOGISTICS_TYPE => new SeaLogistics,
        ROAD_LOGISTICS_TYPE => new RoadLogistics,
    };
}

$transport = getLogistics(SEA_LOGISTICS_TYPE);
$transport->planDelivery();
