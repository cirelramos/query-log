# query-log

[![Software License][ico-license]](LICENSE.md)

## About

The `query-log` package to send query-log to console with extra info and catch query sql .


## Installation

Require the `cirelramos/query-log` package in your `composer.json` and update your dependencies:
```sh
composer require cirelramos/query-log
```


## Configuration

The defaults are set in `config/query-log.php`. Publish the config to copy the file to your own config:
```sh
php artisan vendor:publish --provider="CirelRamos\QueryLog\Providers\ServiceProvider"
```

> **Note:** this is necessary to you can change default config



## Usage

add provider in config/app.php

```php
    'providers' => [
        CirelRamos\QueryLog\Providers\QueryLogProvider::class,
   ]
```


## License

Released under the MIT License, see [LICENSE](LICENSE).


[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

