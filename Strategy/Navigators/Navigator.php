<?php

namespace Navigators;

use Strategies\RouteStrategy;

class Navigator implements RouteStrategy
{
    public function __construct(protected RouteStrategy $routeStrategy)
    {
    }

    public function setRouteStrategy(RouteStrategy $routeStrategy): self
    {
        $this->routeStrategy = $routeStrategy;

        return $this;
    }

    public function buildRoute(string $coordinatesA, string $coordinatesB): string
    {
        return $this->routeStrategy->buildRoute($coordinatesA, $coordinatesB);
    }
}
