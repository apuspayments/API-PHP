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
use ApusPayments\Client\Request\SearchPayment;
use ApusPayments\Client\Response\Payment;
use ApusPayments\Client\Response\Status;
use ApusPayments\Client\Response\PaymentDetail;
use ApusPayments\Client\Request\RechargeCryptoBalance;

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
        
        $this->assertEquals($expected->getBuyer(), $checkout->getBuyer());
        $this->assertEquals($expected->getCurrency(), $checkout->getCurrency());
        $this->assertEquals($expected->getCoin()->getName(), $checkout->getCoin()->getName());
        $this->assertInternalType('float', $checkout->getCoin()->getAmount());
        $this->assertInternalType('float', $checkout->getCoin()->getFee());
    }
    
    public function testSearchPayment() {
        $platform = new Platform(Environment::sandbox());
        $searchPayment = new SearchPayment();
        $searchPayment->setVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        $status = new Status();
        $status->setCode("021");
        $status->setMessage("Query performed successfully");
        $payment = $platform->searchPayment($searchPayment);
        
        $this->assertInstanceOf(Payment::class, $payment);
        $this->assertEquals($status, $payment->getStatus());
        $this->assertContainsOnlyInstancesOf(PaymentDetail::class, $payment->getData());
        $this->assertGreaterThan(55, $payment->getData());
    }
    
    public function testRechargeCryptoBalance() {
        $this->markTestSkipped("Check return type!");
        $platform = new Platform(Environment::sandbox());
        $rechargeCryptoBalance = new RechargeCryptoBalance();
        $rechargeCryptoBalance->setAmount(100000.00);
        $rechargeCryptoBalance->setBlockchain(BlockChainType::LTC);
        $rechargeCryptoBalance->setCurrency(CurrencyType::BRL);
        $rechargeCryptoBalance->setPan(hash("sha256", "9999999999999999"));
        $rechargeCryptoBalance->setPassword(hash("sha256", "1234"));
        $rechargeCryptoBalance->setVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        
        $checkout = $platform->rechargeCryptoBalance($rechargeCryptoBalance);
        
    }
}