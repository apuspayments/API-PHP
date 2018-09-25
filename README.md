# API-PHP

ApusPayments is a plataform to make payments using criptocurrencies. 

* Language: PHP

[Documentation API (v0.0.1)](https://docs.apuspayments.com/)

## Examples of use 

* [ ] Payments by card
* [ ] Recurring payments
* [ ] Cancel payment
* [ ] Consult payments
* [ ] Cryptocurrency recharge

<hr>

## Payments by card

```php
<?php echo "Payments by card"; ?>
```

<hr>

## Recurring payments

```php
$spec->withPan("0866a6eaea5cb085e4cf6ef19296bf19647552dd5f96f1e530db3ae61837efe7")
->withPassword("c66f1f34f49381e467d3abd43c77947f5d1dd362fd0eec6c2c1f27233ae9adf9")
->withBlockchain(Blockchain::LTC)
->withAmount(213.88)
->withCurrency(Currency::BRL)
->withVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
```
<hr>

## Cancel payment

```php
<?php echo "Cancel payment"); ?>
```
<hr>

## Consult payments

```php
<?php echo "Consult payments"); ?>
```
<hr>

## Cryptocurrency recharge

```php
<?php echo "Cryptocurrency recharge"); ?>
```
