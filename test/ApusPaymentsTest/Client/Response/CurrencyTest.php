<?php
namespace ApusPaymentsTest\Client\Response;

use ApusPayments\Client\Response\Currency;
use PHPUnit\Framework\TestCase;

class CurrencyTest extends TestCase {
    
    public function testUpdateValues() {
        $data = new \stdClass();
        $data->amount = 198.99;
        $data->name = "BRL";
        
        $currency = new Currency();
        $currency->updateValues($data);
        
        $this->assertEquals(198.99, $currency->getAmount());
        $this->assertEquals("BRL", $currency->getName());
    }
}