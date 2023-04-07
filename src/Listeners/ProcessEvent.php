<?php

namespace ALTrees\Talos\Listeners;

use ALTrees\Talos\Listeners\Contracts\Processable;

class ProcessEvent
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        // ...
    }

    /**
     * Handle the event.
     */
    public function handle(Processable $event): void
    {
        // Access the order using $event->order...
    }
}
