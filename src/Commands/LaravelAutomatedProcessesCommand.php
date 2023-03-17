<?php

namespace ALTrees\LaravelAutomatedProcesses\Commands;

use Illuminate\Console\Command;

class LaravelAutomatedProcessesCommand extends Command
{
    public $signature = 'laravelautomatedprocesses';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
