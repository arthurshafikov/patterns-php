<?php

namespace Devices;

interface Device
{
    public function isEnabled(): bool;
    public function enable(): self;
    public function disable(): self;
    public function getVolume(): int;
    public function setVolume(int $percent): self;
    public function getChannel(): int;
    public function setChannel(int $channelNumber): self;
}
