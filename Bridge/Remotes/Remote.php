<?php

namespace Remotes;

use Devices\Device;

class Remote
{
    public function __construct(protected readonly Device $device)
    {
    }

    public function togglePower(): self
    {
        if ($this->device->isEnabled()) {
            $this->device->disable();
        } else {
            $this->device->enable();
        }

        return $this;
    }

    public function volumeDown(): self
    {
        $this->device->setVolume($this->device->getVolume() - 10);

        echo "Volume is {$this->device->getVolume()}\n";

        return $this;
    }

    public function volumeUp(): self
    {
        $this->device->setVolume($this->device->getVolume() + 10);

        echo "Volume is {$this->device->getVolume()}\n";

        return $this;
    }

    public function channelDown(): self
    {
        $this->device->setChannel($this->device->getChannel() - 1);

        echo "Channel is {$this->device->getChannel()}\n";

        return $this;
    }

    public function channelUp(): self
    {
        $this->device->setChannel($this->device->getChannel() + 1);

        echo "Channel is {$this->device->getChannel()}\n";

        return $this;
    }
}
