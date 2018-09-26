<?php
namespace ApusPaymentsTest\Client\Response;

use PHPUnit\Framework\TestCase;
use ApusPayments\Client\Response\Buyer;

class BuyerTest extends TestCase {

    public function testUpdateValues() {
        
        $data = new \stdClass();
        $data->address = "address123";
        $data->userId = "user-id";
        
        $buyer = new Buyer();
        $buyer->updateValues($data);
        
        $this->assertEquals("address123", $buyer->getAddress());
        $this->assertEquals("user-id", $buyer->getUserId());
    }
}
