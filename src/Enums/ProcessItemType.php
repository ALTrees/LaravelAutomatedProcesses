<?php

namespace ALTrees\Talos\Enums;

enum ProcessItemType: string
{
    case Trigger = 'trigger';
    case Filter = 'filter';
    case Action = 'action';

    public function isTrigger(): bool
    {
        return $this === ProcessItemType::Trigger;
    }

    public function isFilter(): bool
    {
        return $this === ProcessItemType::Filter;
    }

    public function isAction(): bool
    {
        return $this === ProcessItemType::Action;
    }
}
