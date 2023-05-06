<?php

namespace Strategies;

class WalkingStrategy implements RouteStrategy
{
    public function buildRoute(string $coordinatesA, string $coordinatesB): string
    {
        // some calculations...

        // response e.g.
        return "You need to go up the X hill, walking by the Y waterfall and stop near the Z church...\n";
    }
}
