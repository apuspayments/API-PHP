<?php
namespace ApusPaymentsTest\Client\Request;

use PHPUnit\Framework\TestCase;
use ApusPayments\Client\Request\CancelPayment;

class CancelPaymentTest extends TestCase {

    public function testJsonSerialize() {
        $cancelPayment = new CancelPayment();
        $cancelPayment->setPassword("1234");
        $cancelPayment->setTxId("transaction-id");
        $cancelPayment->setVendorKey("vendor-key");
        
        $expected = array(
            "password" => "1234",
            "txId" => "transaction-id",
            "vendorKey" => "vendor-key",
        );
        
        $this->assertEquals($expected, $cancelPayment->jsonSerialize());
    }
}