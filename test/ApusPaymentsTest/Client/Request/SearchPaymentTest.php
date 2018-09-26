<?php
namespace ApusPaymentsTest\Client\Request;

use ApusPayments\Client\Request\SearchPayment;
use ApusPayments\Constants\BlockChainType;
use ApusPayments\Constants\CurrencyType;
use PHPUnit\Framework\TestCase;

class SearchPaymentTest extends TestCase {
    
    public function testJsonSerialize() {
        $searchPayment = new SearchPayment();
        $searchPayment->setBlockchain(BlockChainType::ETH);
        $searchPayment->setBuyer("90101091");
        $searchPayment->setCoinAmount(887651.99);
        $searchPayment->setCurrency(CurrencyType::BRL);
        $searchPayment->setTimestamp("2005-08-15T15:52:01");
        $searchPayment->setTxId("transaction-id");
        $searchPayment->setVendorKey("12901kl1l1l1000090as");
        
        $expected = array(
            "blockchain" => "ETH",
            "buyer" => "90101091",
            "coinAmount" => 887651.99,
            "currency" => "BRL",
            "timestamp" => "2005-08-15T15:52:01",
            "txId" => "transaction-id",
            "vendorKey" => "12901kl1l1l1000090as",
        );
        
        $this->assertEquals($expected, $searchPayment->jsonSerialize());
    }
}