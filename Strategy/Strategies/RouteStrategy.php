<?php

namespace Strategies;

interface RouteStrategy
{
    public function buildRoute(string $coordinatesA, string $coordinatesB): string;
}
