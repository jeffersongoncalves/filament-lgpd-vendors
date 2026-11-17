<?php

namespace JeffersonGoncalves\Filament\LgpdVendors;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class LgpdVendorsServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-lgpd-vendors';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
