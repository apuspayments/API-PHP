# API-PHP

ApusPayments is a plataform to make payments using criptocurrencies. 

* Language: PHP

[Documentation API (v0.0.1)](https://docs.apuspayments.com/)

[![Latest Stable Version](https://poser.pugx.org/apuspayments/client/version)](https://packagist.org/packages/apuspayments/client)
[![Latest Unstable Version](https://poser.pugx.org/apuspayments/client/v/unstable)](//packagist.org/packages/apuspayments/client)
[![Total Downloads](https://poser.pugx.org/apuspayments/client/downloads)](https://packagist.org/packages/apuspayments/client)

## Examples of use 

* [x] Payments by card
* [x] Recurring payments
* [x] Cancel payment
* [x] Consult payments
* [x] Cryptocurrency recharge

<hr>

## Getting Started

Install using [Composer](https://packagist.org/packages/apuspayments/client).

```
$ composer require apuspayments/client
```

## Payments by card

```php
$apusPaymentsAPI = new ApusPaymentsAPI(Environment::sandbox());

$makePayment = new MakePayment();

$makePayment->setAmount(0.01);
$makePayment->setBlockchain(BlockChainType::LTC);
$makePayment->setCurrency(CurrencyType::BRL);
$makePayment->setPan("9999999999999999");
$makePayment->setPassword("1234");
$makePayment->setVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");

$makePaymentResponse = $apusPaymentsAPI->makePayment($makePayment);
```

<hr>

## Recurring payments

```php
$apusPaymentsAPI = new ApusPaymentsAPI(Environment::sandbox());

$makeRecurringPayment = new MakeRecurringPayment();

$makeRecurringPayment->setAmount(0.01);
$makeRecurringPayment->setBlockchain(BlockChainType::LTC);
$makeRecurringPayment->setCurrency(CurrencyType::BRL);
$makeRecurringPayment->setPeriod(PeriodType::M);
$makeRecurringPayment->setFrequency(12);
$makeRecurringPayment->setExecute(true);
$makeRecurringPayment->setPan("9999999999999999");
$makeRecurringPayment->setPassword("1234");
$makeRecurringPayment->setVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");

$makeRecurringPaymentResponse = $apusPaymentsAPI->makeRecurringPayment($makePayment);
```
<hr>

## Cancel payment

```php
$apusPaymentsAPI = new ApusPaymentsAPI(Environment::sandbox());

$cancelPayment = new CancelPayment();

$cancelPayment->setTxId("1234"));
$cancelPayment->setPassword("1234");
$cancelPayment->setVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");

$cancelPaymentResponse = $apusPaymentsAPI->cancelPayment($cancelPayment);
```
<hr>

## Consult payments

```php
$apusPaymentsAPI = new ApusPaymentsAPI(Environment::sandbox());

$searchPayment = new SearchPayment();
$searchPayment->setVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");

$searchPaymentResponse = $apusPaymentsAPI->searchPayment($searchPayment);
```
<hr>

## Cryptocurrency recharge

```php
$apusPaymentsAPI = new ApusPaymentsAPI(Environment::sandbox());

$rechargeCryptoBalance = new RechargeCryptoBalance();

$rechargeCryptoBalance->setAmount(100000.00);
$rechargeCryptoBalance->setBlockchain(BlockChainType::LTC);
$rechargeCryptoBalance->setCurrency(CurrencyType::BRL);
$rechargeCryptoBalance->setPan("9999999999999999"));
$rechargeCryptoBalance->setPassword("1234"));
$rechargeCryptoBalance->setVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");

$rechargeCryptoBalanceResponse = $apusPaymentsAPI->rechargeCryptoBalance($rechargeCryptoBalance);
```
