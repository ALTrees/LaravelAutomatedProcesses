<?php

namespace ALTrees\Talos\Listeners;

use ALTrees\Talos\Listeners\Contracts\Processable;
use ALTrees\Talos\Tests\Events\TestProcessableEvent;
use Illuminate\Events\Dispatcher;

class ProcessableEventSubscriber
{
    /**
     * Register the listeners for the subscriber.
     */
    public function subscribe(Dispatcher $events): void
    {
        $processableEvents = $this->getProcessableEvents();
        foreach($processableEvents as $event) {
            $events->listen($event, ProcessEvent::class);
        }
    }

    protected function getProcessableEvents() : array
    {
        $processableInterface = Processable::class;
        if (!interface_exists($processableInterface)) return [];

        return array_filter(
            get_declared_classes(),
            fn ($class) => is_subclass_of($class, $processableInterface),
        );
    }
}
