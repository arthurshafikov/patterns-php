<?php

namespace Devices;

class Radio implements Device
{
    protected bool $enabled = false;
    protected int $volume = 0;
    protected int $channel = 0;

    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function enable(): Device
    {
        $this->enabled = true;

        echo "Radio is enabled!\n";

        return $this;
    }

    public function disable(): Device
    {
        $this->enabled = false;

        echo "Radio is disabled!\n";

        return $this;
    }

    public function getVolume(): int
    {
        return $this->volume;
    }

    public function setVolume(int $percent): Device
    {
        $this->volume = $percent;

        return $this;
    }

    public function getChannel(): int
    {
        return $this->channel;
    }

    public function setChannel(int $channelNumber): Device
    {
        $this->channel = $channelNumber;

        return $this;
    }
}
