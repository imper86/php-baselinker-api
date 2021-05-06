# Baselinker.com API PHP SDK

## Installation
```sh
composer require imper86/php-baselinker-api
```

### HTTPlug note
This lib uses [HTTPlug](https://github.com/php-http/httplug)
so it doesn't depend on any http client. In order to use this
lib you must have some [PSR-18 http client](https://www.php-fig.org/psr/psr-18)
and [PSR-17 http factories](https://www.php-fig.org/psr/psr-17).
If you don't know which one you shoud install you can require
these:

```sh
composer require php-http/guzzle6-adapter http-interop/http-factory-guzzle
```

## Usage

Using this library is very simple, fast example should be
enough to understand how it works.

```php
<?php

use Imper86\PhpBaselinkerApi\BaselinkerApi;
use Imper86\PhpBaselinkerApi\Model\Orders\GetJournalList\GetJournalListRequest;
use Imper86\PhpBaselinkerApi\Model\ProductsStorage\GetProductsList\GetProductsListRequest;
use Imper86\PhpBaselinkerApi\Plugin\ErrorPlugin;

require_once __DIR__ . '/vendor/autoload.php';

$token = 'your-api-token';
$api = new BaselinkerApi($token);
$api->addPlugin(new ErrorPlugin());

$productsResponse = $api->productsStorage()->getProductsList(new GetProductsListRequest('bl_1'));

var_dump($productsResponse);

$journalResponse = $api->orders()->getJournalList(new GetJournalListRequest(123456));

var_dump($journalResponse);
```

## Contributing
Any help will be very appreciated :)
