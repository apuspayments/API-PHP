<?php
namespace ApusPaymentsTest\Client\Response;

use PHPUnit\Framework\TestCase;
use ApusPayments\Client\Response\Transaction;

class TransactionTest extends TestCase {
    
    public function testUpdateValues() {
        $transaction = new Transaction();
        $transaction->updateValues(json_decode($this->getJsonString()));
        
        $this->assertEquals(1538057112, $transaction->getTimestamp());
        $this->assertEquals("2bf779e2a311c2629df977b0bb105879411fd71f5839972c4ed1d3278f80170f", $transaction->getTxId());
        $this->assertEquals("QWKKEKRbRf2XrsbdQ8Cd5cgLxY7B6CGP37", $transaction->getBuyer()->getAddress());
        $this->assertEquals("43de9565-943e-49ff-b808-82d54a87199f", $transaction->getBuyer()->getUserId());
    }
    
    private function getJsonString() : string {
        return '{
            "buyer": {
    			"address": "QWKKEKRbRf2XrsbdQ8Cd5cgLxY7B6CGP37",
    			"userId": "43de9565-943e-49ff-b808-82d54a87199f"
    		},
            "txId": "2bf779e2a311c2629df977b0bb105879411fd71f5839972c4ed1d3278f80170f",
            "timestamp" : 1538057112
        }';
    }
}