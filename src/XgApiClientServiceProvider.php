<?php

namespace Xgenious\XgApiClient;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Xgenious\XgApiClient\Commands\XgApiClientCommand;

class XgApiClientServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('xgapiclient')
            ->hasConfigFile('xgapiclient')
            ->hasViews('XgApiClient')
            ->hasRoute('web')
            ->hasMigration('create_xg_ftp_infos_table')
            ->hasCommand(XgApiClientCommand::class);
    }
}