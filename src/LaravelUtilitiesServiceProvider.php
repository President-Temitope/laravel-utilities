<?php

namespace Callmehalpha\LaravelUtilities;

use Callmehalpha\LaravelUtilities\Commands\LaravelUtilitiesCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelUtilitiesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('utilities')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-utilities_table')
            ->hasCommand(LaravelUtilitiesCommand::class);
    }
}
