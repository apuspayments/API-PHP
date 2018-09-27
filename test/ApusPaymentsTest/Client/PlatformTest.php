<?php
namespace  ApusPaymentsTest\Client;

use PHPUnit\Framework\TestCase;
use ApusPayments\Client\Platform;
use ApusPayments\Constants\Environment;
use ApusPayments\Client\Request\MakePayment;
use ApusPayments\Constants\BlockChainType;
use ApusPayments\Constants\CurrencyType;
use ApusPayments\Client\Response\Checkout;
use ApusPayments\Client\Response\Buyer;
use ApusPayments\Client\Response\Coin;
use ApusPayments\Client\Response\Currency;

class PlatformTest extends TestCase {
    
    public function testMakePayment() {
        $platform = new Platform(Environment::sandbox());
        $makePayment = new MakePayment();
        $makePayment->setAmount(0.01);
        $makePayment->setBlockchain(BlockChainType::LTC);
        $makePayment->setCurrency(CurrencyType::BRL);
        $makePayment->setPan(hash("sha256", "9999999999999999"));
        $makePayment->setPassword(hash("sha256", "1234"));
        $makePayment->setVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        
        $checkout = $platform->makePayment($makePayment);
        
        $buyer = new Buyer();
        $buyer->setName("Fellipe");
        $buyer->setEmail("d2663898@nwytg.net");
        
        $coin = new Coin();
        $coin->setFee(0.00054);
        $coin->setAmount(0.00003981);
        $coin->setName("LTC");
        
        $currency = new Currency();
        $currency->setAmount(0.01);
        $currency->setName("BRL");
        
        $expected = new Checkout();
        
        $expected->setBuyer($buyer);
        $expected->setCoin($coin);
        $expected->setCurrency($currency);
        
        $this->assertEquals($expected, $checkout);
        
    }
}