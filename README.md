# Payme

## Laravel Payment Payme

[![N|Solid](https://cldup.com/dTxpPi9lDf.thumb.png)](https://cyberbrains.uz)

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://github.com/cyberbrains/laravel_payment_octo)

Cyberbrains Laravel Payment Payme is payment ready configurable composer package for laravel.

- Less effort
- Extendable
- Configurable
- ✨Magic ✨

## Features

- Notify user about payment
- Secure Payment
- Extend Payment Service

Laravel Payment Payme package made easy your development process for Mastercard and Visa payment methods.
Find more information about integration in [Payme](https://help.octo.uz/ru/s-chego-nachat)

## Installation

Payme requires [Laravel](https://laravel.com/) v7+ to run.

Install package using composer.

```sh
composer require cyberbrains/laravel_payment_payme
```

Publish Service Provider

```sh
php artisan vendor:publish --provider="cyberbrains\Providers\PaymeServiceProvider" --tag="config"
```

Migrate Transaction and orders table

```sh
php artisan migrate
```

ADD variable to .env

PAYCOM_TRANSACTIONS_TABLE=paycom_transactions
PAYCOM_ORDERS_TABLE=orders
PAYCOM_USERS_TABLE=users
PAYCOM_MERCHANT=
PAYCOM_KEY=
PAYCOM_KEY_TEST=
PAYCOM_TEST=

## License

MIT

MIT License

Copyright (c) 2022 Teampordev

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

