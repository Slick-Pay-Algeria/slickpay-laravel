<p align="center"><a href="https://slick-pay.com" target="_blank"><img src="https://azimutbscenter.com/logos/slick-pay.png" width="380" height="auto" alt="Slick-Pay Logo"></a></p>

## Description

Laravel package for [Slick-Pay](https://slick-pay.com) API implementation.

- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Configuration](#configuration)
  - [sandbox](#sandbox)
  - [public_key](#public_key)
- [How to use?](#how-to-use)
  - [User](#user)
  - [Merchant](#merchant)
- [More help](#more-help)

## Prerequisites

- PHP 7.4 or above ;
- [curl](https://secure.php.net/manual/en/book.curl.php) extension must be enabled ;
- [Laravel](https://laravel.com) 8.0 or above.

## Installation

Just run this command line :

```sh
composer require slick-pay-algeria/slickpay-laravel
```

You must add your SLICKPAY_PUBLIC_KEY that you have gotten from your slick pay account to your env variable like so (see the details in the public key section).

```sh
SLICKPAY_PUBLIC_KEY="public key goes here".
```

## Configuration

You can publish the package config file with the command line :

```sh
php artisan vendor:publish --tag=slickpay-config
```

Now, you can find a file **slickpay.php** within your project **config** folder.

```php
<?php

return [
    'sandbox'    => true,
    'public_key' => env("SLICKPAY_PUBLIC_KEY"),
];
```

### sandbox

Will indicate if you want to use the sandbox or live environment (default: true).

### public_key

You can retreive your **PUBLIC_KEY** from your [slick-pay.com](https://slick-pay.com) dashboard.

## How to use?

> **Important:** Please check the [online documentation](https://devapi.slick-pay.com) for more details about Slick-Pay API requests parameters & responses.

Available classes :

### User

- **SlickPay\User\Account**: Implements the user account Slick-Pay API.
  - **Account::store(array $data): array** : Store a new account in storage.
  - **Account::show(string $uuid): array** : Get the specified account data.
  - **Account::index(int $offset, int $page): array** : Get a listing of the user account.
  - **Account::update(string $uuid, array $data): array** : Update the specified account in storage.
  - **Account::destroy(string $uuid): array** : Remove the specified account from storage.
- **SlickPay\User\Contact**: Implements the user contact Slick-Pay API.
  - **Contact::store(array $data): array** : Store a new contact in storage.
  - **Contact::show(string $uuid): array** : Get the specified contact data.
  - **Contact::index(int $offset, int $page): array** : Get a listing of the user contact.
  - **Contact::update(string $uuid, array $data): array** : Update the specified contact in storage.
  - **Contact::destroy(string $uuid): array** : Remove the specified contact from storage.
- **SlickPay\User\Transfer**: Implements the user transfer Slick-Pay API.
  - **Transfer::commission(float $amount): array** : Calculate transfer commission.
  - **Transfer::store(array $data): array** : Store a new transfer in storage.
  - **Transfer::show(int $id): array** : Get the specified transfer data.
  - **Transfer::index(int $offset, int $page): array** : Get a listing of the user transfer.
  - **Transfer::update(int $id, array $data): array** : Update the specified transfer in storage.
  - **Transfer::destroy(int $id): array** : Remove the specified transfer from storage.
- **SlickPay\User\Aggregation**: Implements the user aggregation Slick-Pay API.
  - **Aggregation::commission(float $amount): array** : Calculate aggregation commission.
  - **Aggregation::store(array $data): array** : Store a new aggregation in storage.
  - **Aggregation::show(int $id): array** : Get the specified aggregation data.
  - **Aggregation::index(int $offset, int $page): array** : Get a listing of the user aggregation.
  - **Aggregation::update(int $id, array $data): array** : Update the specified aggregation in storage.
  - **Aggregation::destroy(int $id): array** : Remove the specified aggregation from storage.
- **SlickPay\User\Invoice**: Implements the user invoice Slick-Pay API.
  - **Invoice::commission(float $amount): array** : Calculate invoice commission.
  - **Invoice::store(array $data): array** : Store a new invoice in storage.
  - **Invoice::show(int $id): array** : Get the specified invoice data.
  - **Invoice::index(int $offset, int $page): array** : Get a listing of the user invoice.
  - **Invoice::update(int $id, array $data): array** : Update the specified invoice in storage.
  - **Invoice::destroy(int $id): array** : Remove the specified invoice from storage.

### Merchant

- **SlickPay\Merchant\Invoice**: Implements the merchant invoice Slick-Pay API.
  - **Invoice::store(array $data): array** : Store a new invoice in storage.
  - **Invoice::show(int $id): array** : Get the specified invoice data.
  - **Invoice::index(int $offset, int $page): array** : Get a listing of the merchant invoice.
  - **Invoice::update(int $id, array $data): array** : Update the specified invoice in storage.
  - **Invoice::destroy(int $id): array** : Remove the specified invoice from storage.

> **Important:** All above classes methods return array with the following indexes : **data** (contains API response), **status** (HTTP response code from Slick-Pay API server) and **errors** (array that contains error messages).

## More help

- [Slick-Pay website](https://slick-pay.com)
- [Reporting Issues / Feature Requests](https://github.com/Slick-Pay-Algeria/slickpay-laravel/issues)
