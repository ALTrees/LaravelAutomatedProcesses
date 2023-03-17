<?php

namespace ALTrees\LaravelAutomatedProcesses;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ALTrees\LaravelAutomatedProcesses\Commands\LaravelAutomatedProcessesCommand;

class LaravelAutomatedProcessesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravelautomatedprocesses')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravelautomatedprocesses_table')
            ->hasCommand(LaravelAutomatedProcessesCommand::class);
    }
}
