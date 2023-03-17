<?php

namespace ALTrees\LaravelAutomatedProcesses\Tests;

use ALTrees\LaravelAutomatedProcesses\LaravelAutomatedProcessesServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'ALTrees\\LaravelAutomatedProcesses\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelAutomatedProcessesServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravelautomatedprocesses_table.php.stub';
        $migration->up();
        */
    }
}
