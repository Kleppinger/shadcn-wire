<?php

namespace Kleppinger\ShadcnWire;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kleppinger\ShadcnWire\Commands\ShadcnWireCommand;

class ShadcnWireServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('shadcn-wire')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_shadcn_wire_table')
            ->hasCommand(ShadcnWireCommand::class);
    }
}
