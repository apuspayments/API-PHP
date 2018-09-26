<?php
namespace ApusPaymentsTest\Client\Request;

use ApusPayments\Client\Request\RechargeCryptoBalance;
use PHPUnit\Framework\TestCase;
use ApusPayments\Constants\BlockChainType;
use ApusPayments\Constants\CurrencyType;

class RechargeCryptoBalanceTest extends TestCase {
    
    public function testJsonSerialize() {
        $rechargeCryptoBalance = new RechargeCryptoBalance();
        $rechargeCryptoBalance->setAmount(10876.99);
        $rechargeCryptoBalance->setBlockchain(BlockChainType::DCR);
        $rechargeCryptoBalance->setCurrency(CurrencyType::BRL);
        $rechargeCryptoBalance->setPan("109109109-10910910910-91019091");
        $rechargeCryptoBalance->setPassword("123");
        $rechargeCryptoBalance->setVendorKey("1212019201-9102901921-9101001");
        
        $expected = array(
            "amount" => 10876.99,
            "blockchain" => "DCR",
            "currency" => "BRL",
            "pan" => "109109109-10910910910-91019091",
            "password" => "123",
            "vendorKey" => "1212019201-9102901921-9101001",
        );
        
        $this->assertEquals($expected, $rechargeCryptoBalance->jsonSerialize());
    }
}