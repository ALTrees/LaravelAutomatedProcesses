<?php

namespace ALTrees\Talos;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ALTrees\Talos\Commands\TalosCommand;
use ALTrees\Talos\Listeners\ProcessableEventSubscriber;

class TalosServiceProvider extends PackageServiceProvider
{

    public function boot()
    {
        parent::boot();

        \Illuminate\Support\Facades\Event::subscribe(ProcessableEventSubscriber::class);
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('Talos')
            ->hasConfigFile('talos')
            ->hasViews()
            ->hasMigration('create_talos_table')
            ->hasCommand(TalosCommand::class);
    }
}
