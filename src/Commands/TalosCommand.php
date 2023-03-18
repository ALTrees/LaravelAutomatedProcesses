<?php

namespace ALTrees\Talos\Commands;

use Illuminate\Console\Command;

class TalosCommand extends Command
{
    public $signature = 'Talos';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
