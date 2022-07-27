# JSON parser

[![Latest Version on Packagist](https://img.shields.io/packagist/v/free-id/json.svg?style=flat-square)](https://packagist.org/packages/free-id/json)
[![Tests](https://github.com/free-id/json/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/free-id/json/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/free-id/json.svg?style=flat-square)](https://packagist.org/packages/free-id/json)

## Installation

You can install the package via composer:

```bash
composer require free-id/json
```

## Usage

```php
use FreeId\Json\Parser;

$parser = new Parser();
echo $parser->find();
```

## Parameters

| Parameter               | Description                                          | Default |
|-------------------------|------------------------------------------------------|---------|
| path (string)           | Path to the file to be searched                      | -       |
| parent_element (string) | Parent element in which the search will be performed | -       |
| attribute (string)      | Attribute by which the search will be performed      | id      |
| start_id (int)          | Identifier from which the search will start          | 1       |

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/free-id/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Vitaly Kuzyaev](https://github.com/vitkuz573)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
