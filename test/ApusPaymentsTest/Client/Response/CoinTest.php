<?php
namespace ApusPaymentsTest\Client\Response;

use PHPUnit\Framework\TestCase;
use ApusPayments\Client\Response\Coin;

class CoinTest extends TestCase {
 
    public function testUpdateValues() {
        $data = new \stdClass();
        $data->name = "BTC";
        $data->amount = 1991.99;
        $data->fee = 0.000187;
        
        $coin = new Coin();
        $coin->updateValues($data);
        
        $this->assertEquals("BTC", $coin->getName());
        $this->assertEquals(1991.99, $coin->getAmount());
        $this->assertEquals(0.000187, $coin->getFee());
    }
}