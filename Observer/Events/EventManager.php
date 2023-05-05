<?php

namespace Events;

use Listeners\Listener;

class EventManager
{
    public const ORDER_IN_PROGRESS_EVENT = 'order_in_progress';
    public const ORDER_CANCELLED_EVENT = 'order_cancelled';
    public const ORDER_COMPLETED_EVENT = 'order_completed';
    public const REGISTRATION_EVENT = 'registration_event';

    private array $listeners = [];

    public function subscribe(string $eventType, Listener $listener): void
    {
        $this->listeners[$eventType][] = $listener;
    }

    public function unsubscribe(string $eventType, Listener $listener): void
    {
        $this->listeners[$eventType] = array_filter($this->listeners[$eventType], function ($existingListener) use ($listener) {
            return !$existingListener instanceof $listener;
        });
    }

    public function notify(string $eventType, $data): void
    {
        foreach ($this->listeners[$eventType] as $listener) {
            $listener->handle($data);
        }
    }
}
