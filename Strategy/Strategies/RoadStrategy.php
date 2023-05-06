<?php

namespace Strategies;

class RoadStrategy implements RouteStrategy
{
    public function buildRoute(string $coordinatesA, string $coordinatesB): string
    {
        // some calculations...

        // response e.g.
        return "You need to ride down the X road, stop near the Y church...\n";
    }
}
