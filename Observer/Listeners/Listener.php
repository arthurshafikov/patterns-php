<?php

namespace Listeners;

interface Listener
{
    public function handle($data): void;
}
