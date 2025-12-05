# A modular, extensible SaaS foundation plugin for Filament v4 using a shared-database tenancy model.It ships with production-ready building blocks including organizations, teams, RBAC, subscription/billing scaffolding, audit logs, feature flags, API keys, notifications, onboarding workflows, workspace switching, and app-wide settings — all implemented using native Filament patterns.Perfect for developers who want a scalable, maintainable, and modern starting point for building real SaaS applications on Laravel + Filament with clean service/repository architecture.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/netizens/filament-saas-kit.svg?style=flat-square)](https://packagist.org/packages/netizens/filament-saas-kit)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/netizens/filament-saas-kit/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/netizens/filament-saas-kit/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/netizens/filament-saas-kit/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/netizens/filament-saas-kit/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/netizens/filament-saas-kit.svg?style=flat-square)](https://packagist.org/packages/netizens/filament-saas-kit)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require netizens/filament-saas-kit
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-saas-kit-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-saas-kit-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-saas-kit-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentSaasKit = new Netizens\FilamentSaasKit();
echo $filamentSaasKit->echoPhrase('Hello, Netizens!');
```

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

- [Gaurav Vaishnav](https://github.com/netizens-gaurav)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
