# API-PHP

SDK da plataforma de pagamento Apus. 
* Language: PHP

## Principais recursos

* [x] Pagamentos por cartão.
* [ ] Pagamentos recorrentes.
* [ ] Pagamentos por transferência.
* [ ] Consulta de pagamentos.

<hr>

## Blockchains suportadas

| Blockchain       | Constante              | Recorrente |
|------------------|------------------------|------------|
| Bitcoin          | Blockchain::BTC        | Sim        |
| Decred           | CreditCard::DCR        | Sim        |
| Ethereum         | CreditCard::ETH        | Sim        |
| Litecoin         | CreditCard::LTC        | Sim        |

<hr>

## Pagamentos por cartão.

Pagamentos utilizando número do cartão e senha.

```php
<?php
require 'vendor/autoload.php';

use Apus\API30\Merchant;

use Apus\API30\Ecommerce\Payment;

// ...
// Configure o ambiente
$environment = $environment = Environment::sandbox();

// Configure seu merchant
$merchant = new Merchant('MERCHANT ID', 'MERCHANT KEY');

// Crie uma instância de payment utilizando os dados de teste
$payment->setType(Blockchain::BTC)
        ->creditCard("00001111222233334444")
        ->setPassword("*******")
        ->setAmout(10.00)
        ->setCurrency("BRL");

// Crie o pagamento na Apus
try {
    // Configure o SDK com seu merchant e o ambiente apropriado para criar a venda
    $paymentId = $payment->pay();
} catch (ApusRequestException $e) {
    // Em caso de erros de integração, podemos tratar o erro aqui.
    // os códigos de erro estão todos disponíveis no manual de integração.
    $error = $e->getError();
}
// ...
```

## Pagamentos recorrentes.

Pagamentos utilizando número do cartão e senha de forma recorrente.

```php
<?php
require 'vendor/autoload.php';

use Apus\API30\Merchant;

use Apus\API30\Ecommerce\Payment;

// ...
// Configure o ambiente
$environment = $environment = Environment::sandbox();

// Configure seu merchant
$merchant = new Merchant('MERCHANT ID', 'MERCHANT KEY');

// Crie uma instância de payment utilizando os dados de teste
$payment->setType(Blockchain::BTC)
        ->creditCard("00001111222233334444")
        ->setPassword("*******")
        ->setAmout(10.00)
        ->setCurrency("BRL");

// Configure o pagamento recorrente
$payment->recurrentPayment(true)->setInterval(RecurrentPayment::MONTHLY);

// Crie o pagamento na Apus
try {
    // Configure o SDK com seu merchant e o ambiente apropriado para criar a venda
    $paymentId = $payment->pay();
} catch (ApusRequestException $e) {
    // Em caso de erros de integração, podemos tratar o erro aqui.
    // os códigos de erro estão todos disponíveis no manual de integração.
    $error = $e->getError();
}
// ...
```
