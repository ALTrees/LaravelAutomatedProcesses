<?php

use ALTrees\Talos\Listeners\ProcessableEventSubscriber;
use ALTrees\Talos\Listeners\ProcessEvent;
use ALTrees\Talos\Tests\Events\TestProcessableEvent;
use Illuminate\Support\Facades\Event;

it('listens to processable events', function () {
    Event::fake();
    Event::assertListening(TestProcessableEvent::class, ProcessEvent::class);
});
