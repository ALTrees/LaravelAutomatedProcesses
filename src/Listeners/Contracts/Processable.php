<?php

namespace ALTrees\Talos\Listeners;

interface Processable
{

    /**
     * The available filters for this processable
     *
     * @return array
     */
    public static function getProcessableFilters() : array;

    /**
     * The available actions for this processable
     *
     * @return array
     */
    public static function getProcessableActions() : array;

}
