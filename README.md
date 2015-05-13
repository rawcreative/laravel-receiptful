## Receiptful for Laravel 5

This is a package to integrate [Receiptful](https://github.com/rawcreative/receiptful) with Laravel.
You can use it to easily connect to the Receiptful API to manage your Receiptful account. This package also provides a Facade for easy shortcuts.

## Installation

Require this package in your composer.json and run composer update (or run `composer require rawcreative/laravel-receiptful:0.1.x` directly):

    "rawcreative/laravel-receiptful": "0.1.*@dev"

After updating composer, add the ServiceProvider to the providers array in config/app.php

    'RawCreative\Receiptful\ReceiptfulServiceProvider',

You will need to add your Receiptful API key to the services.php config file in your app's config directory. We recommend utilizing your .env file to populate the key:

    'receiptful' => [
		'secret' => env('RECEIPTFUL_SECRET', ''),
	],

To use the Facade, add the following to the facades array your app.php config file.

     'Receiptful' => 'RawCreative\Receiptful\Facade',

When calling the Receiptful facade/instance, it will create the Api using the key provided in the services config file.

## Examples
    
```php    
// All receipts
$receipts = Receiptful::receipts(); 
	
// Individual receipt
$receipt = Receiptful::receipt(['receipt_id' => 2]);

// Coupons
$coupons = Receiptful::coupons();
```

## Credits

- [Tim Debo](https://github.com/rawcreative)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
