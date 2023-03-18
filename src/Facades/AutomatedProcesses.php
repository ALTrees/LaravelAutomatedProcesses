<?php

namespace ALTrees\AutomatedProcesses\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ALTrees\AutomatedProcesses\AutomatedProcesses
 */
class AutomatedProcesses extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ALTrees\AutomatedProcesses\AutomatedProcesses::class;
    }
}
