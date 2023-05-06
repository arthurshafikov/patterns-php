<?php

namespace States;

interface State
{
    public function render(): void;

    public function publish(): void;
}
