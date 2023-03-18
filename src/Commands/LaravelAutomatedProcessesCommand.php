<?php

namespace ALTrees\AutomatedProcesses\Commands;

use Illuminate\Console\Command;

class AutomatedProcessesCommand extends Command
{
    public $signature = 'AutomatedProcesses';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
