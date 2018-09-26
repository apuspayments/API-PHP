<?php
namespace ApusPaymentsTest\Client\Request;

use PHPUnit\Framework\TestCase;
use ApusPayments\Client\Request\MakePayment;
use ApusPayments\Constants\BlockChainType;
use ApusPayments\Constants\CurrencyType;

class MakePaymentTest extends TestCase {
    
    public function testJsonSerialize() {
        $makePayment = new MakePayment();
        $makePayment->setAmount(10.87);
        $makePayment->setBlockchain(BlockChainType::BTC);
        $makePayment->setCurrency(CurrencyType::BRL);
        $makePayment->setPan("99999977777766666");
        $makePayment->setPassword("1234");
        $makePayment->setVendorKey("129102910921");
        
        $expected = array(
            "amount" => 10.87,
            "blockchain" => "BTC",
            "currency" => "BRL",
            "pan" => "99999977777766666",
            "password" => "1234",
            "vendorKey" => "129102910921",
        );
        
        $this->assertEquals($expected, $makePayment->jsonSerialize());
    }
}