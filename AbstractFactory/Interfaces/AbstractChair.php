<?php

namespace Interfaces;

interface AbstractChair
{
    public function hasLegs(): bool;
    public function sitOn(): void;
}
