<?php

namespace ALTrees\LaravelAutomatedProcesses\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ALTrees\LaravelAutomatedProcesses\LaravelAutomatedProcesses
 */
class LaravelAutomatedProcesses extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ALTrees\LaravelAutomatedProcesses\LaravelAutomatedProcesses::class;
    }
}
