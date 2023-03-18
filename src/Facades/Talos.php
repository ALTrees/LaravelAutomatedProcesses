<?php

namespace ALTrees\Talos\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ALTrees\Talos\Talos
 */
class Talos extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ALTrees\Talos\Talos::class;
    }
}
