<div class="filament-hidden">

![Filament LGPD Vendors](https://raw.githubusercontent.com/jeffersongoncalves/filament-lgpd-vendors/3.x/art/jeffersongoncalves-filament-lgpd-vendors.png)

</div>

# Filament LGPD Vendors

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-lgpd-vendors.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-lgpd-vendors)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-lgpd-vendors/tests.yml?branch=3.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-lgpd-vendors/actions?query=workflow%3Atests+branch%3A3.x)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-lgpd-vendors/fix-php-code-style-issues.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-lgpd-vendors/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-lgpd-vendors.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-lgpd-vendors)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-lgpd-vendors.svg?style=flat-square)](LICENSE.md)

Keep the register of vendors you share personal data with, from [laravel-lgpd-vendors](https://github.com/jeffersongoncalves/laravel-lgpd-vendors), in your Filament panel. Each vendor shows what it still owes under the LGPD.

## Features

- Vendors with role (processor, independent or joint controller), risk tier, services and data shared.
- Data processing agreement: signed and expiry dates, plus a checklist of what it covers (art. 39). The checklist items come from the `lgpd-vendors.dpa_checklist` config.
- Country and international transfer mechanism (art. 33). The mechanism field shows up only for vendors abroad.
- An **Issues** column: missing, expired or incomplete agreement, no transfer mechanism, review due, data return pending.
- Actions: **Mark as reviewed**, **End relationship** and **Data deleted or returned** (art. 16).
- 19 languages.

## Compatibility

| Plugin Version                                                              | Filament |
|-----------------------------------------------------------------------------|----------|
| [1.x](https://github.com/jeffersongoncalves/filament-lgpd-vendors/tree/1.x) | 3.x      |
| [2.x](https://github.com/jeffersongoncalves/filament-lgpd-vendors/tree/2.x) | 4.x      |
| [3.x](https://github.com/jeffersongoncalves/filament-lgpd-vendors/tree/3.x) | 5.x      |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-lgpd-vendors:"^3.0"
php artisan vendor:publish --tag="lgpd-vendors-migrations"
php artisan migrate
```

## Usage

```php
use JeffersonGoncalves\Filament\LgpdVendors\LgpdVendorsPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            LgpdVendorsPlugin::make()
                ->navigationGroup('LGPD')             // default: no group
                ->navigationSort(6)
                ->navigationIcon('heroicon-o-building-office-2')
                ->slug('vendors'),
        ]);
}
```

All fluent methods are optional.

> The resource has no authorization of its own: register it only on panels whose users maintain the register, or add a policy for `JeffersonGoncalves\LgpdVendors\Models\Vendor`.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
