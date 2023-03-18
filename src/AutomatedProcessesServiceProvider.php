<?php

namespace ALTrees\AutomatedProcesses;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ALTrees\AutomatedProcesses\Commands\AutomatedProcessesCommand;

class AutomatedProcessesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('AutomatedProcesses')
            ->hasConfigFile('automated_processes')
            ->hasViews()
            ->hasMigration('create_AutomatedProcesses_table')
            ->hasCommand(AutomatedProcessesCommand::class);
    }
}
