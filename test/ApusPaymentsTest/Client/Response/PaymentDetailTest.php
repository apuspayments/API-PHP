<?php
namespace ApusPaymentsTest\Client\Response;

use PHPUnit\Framework\TestCase;
use ApusPayments\Client\Response\PaymentDetail;
use ApusPayments\Client\Response\Buyer;
use ApusPayments\Client\Response\Coin;
use ApusPayments\Client\Response\Currency;
use ApusPayments\Client\Response\Seller;

class PaymentDetailTest extends TestCase {
    
    public function testUpdateValues() {
        $paymentDetail = new PaymentDetail();
        $paymentDetail->updateValues(json_decode($this->getJsonString()));
        
        $buyer = new Buyer();
        $buyer->setAddress("QWKKEKRbRf2XrsbdQ8Cd5cgLxY7B6CGP37");
        $buyer->setUserId("43de9565-943e-49ff-b808-82d54a87199f");
        
        $coin = new Coin();
        $coin->setAmount(0.04494037);
        $coin->setFee(0.00054);
        $coin->setName("LTC");
        
        $currency = new Currency();
        $currency->setAmount(10.00);
        $currency->setName("BRL");
        
        $date = \DateTime::createFromFormat(\DateTime::ISO8601, "2018-09-10T23:11:03-03:00");
        
        $seller = new Seller();
        $seller->setAddress("QbTaFSttxH4SfvTKoB14EKapWjk5Da5di2");
        $seller->setUserId("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        
        $this->assertEquals($buyer, $paymentDetail->getBuyer());
        $this->assertEquals($coin, $paymentDetail->getCoin());
        $this->assertEquals($currency, $paymentDetail->getCurrency());
        $this->assertEquals($date, $paymentDetail->getDate());
        $this->assertEquals("05e75c97-6c75-43e6-ac9f-02205707a364", $paymentDetail->getId());
        $this->assertEquals($seller, $paymentDetail->getSeller());
        $this->assertEquals("2bf779e2a311c2629df977b0bb105879411fd71f5839972c4ed1d3278f80170f", $paymentDetail->getTxId());
    }
    
    private function getJsonString() : string {
        return '{
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
        }';
    }
}