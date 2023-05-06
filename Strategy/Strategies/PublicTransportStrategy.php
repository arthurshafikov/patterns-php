<?php

namespace Strategies;

class PublicTransportStrategy implements RouteStrategy
{
    public function buildRoute(string $coordinatesA, string $coordinatesB): string
    {
        // some calculations...

        // response e.g.
        return "You need to use the X bus, you can get in it at Y in the town, then ride until the stop near the Z church...\n";
    }
}
