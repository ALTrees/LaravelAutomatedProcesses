<?php

namespace ALTrees\Talos\Listeners;

interface Processable
{
    /**
     * The available filters for this processable
     */
    public static function getProcessableFilters(): array;

    /**
     * The available actions for this processable
     */
    public static function getProcessableActions(): array;
}
