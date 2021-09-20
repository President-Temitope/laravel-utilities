<?php

namespace Callmehalpha\LaravelUtilities;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Callmehalpha\LaravelUtilities\Commands\LaravelUtilitiesCommand;

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
