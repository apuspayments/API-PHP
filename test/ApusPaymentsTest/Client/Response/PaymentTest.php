<?php
namespace ApusPaymentsTest\Client\Response;

use PHPUnit\Framework\TestCase;
use ApusPayments\Client\Response\Payment;

class PaymentTest extends TestCase {
    
    public function testUpdateValues() {
        $payment = new Payment();
        $payment->updateValues(json_decode($this->getJsonString()));
        
        $this->assertCount(1, $payment->getData());
    }
    
    private function getJsonString() : string {
        return '{
        	"status": {
        		"code": "021",
        		"message": "Query performed successfully",
                "details" : {
                    "location" : "location",
                    "param" : "param",
                    "msg" : "msg"
                }

        	},
        	"data": [{
        		"buyer": {
        			"address": "QWKKEKRbRf2XrsbdQ8Cd5cgLxY7B6CGP37",
        			"userId": "43de9565-943e-49ff-b808-82d54a87199f"
        		},
        		"coin": {
        			"amount": "0.04494037",
        			"fee": 0.00054,
        			"name": "LTC"
        		},
        		"currency": {
        			"amount": "10.00",
        			"name": "BRL"
        		},
        		"date": "2018-09-10T23:11:03-03:00",
        		"id": "05e75c97-6c75-43e6-ac9f-02205707a364",
        		"seller": {
        			"address": "QbTaFSttxH4SfvTKoB14EKapWjk5Da5di2",
        			"userId": "5f5bdaed-f82b-4b82-b3f5-1d562633da5b"
        		},
        		"txId": "2bf779e2a311c2629df977b0bb105879411fd71f5839972c4ed1d3278f80170f"
        	}]
        }';
    }
}