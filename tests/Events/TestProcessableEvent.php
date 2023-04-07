<?php

namespace ALTrees\Talos\Tests\Events;

use ALTrees\Talos\Listeners\Contracts\Processable;
use App\Models\Order;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TestProcessableEvent implements Processable
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct() {}

}
