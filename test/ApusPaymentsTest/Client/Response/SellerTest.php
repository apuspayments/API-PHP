<?php
namespace ApusPaymentsTest\Client\Response;

use PHPUnit\Framework\TestCase;
use ApusPayments\Client\Response\Seller;

class SellerTest extends TestCase {
 
    public function testUpdateValues() {
        $data = new \stdClass();
        $data->address = "address";
        $data->userId = "userId";
        
        $seller = new Seller();
        $seller->updateValues($data);
        
        $this->assertEquals("address", $seller->getAddress());
        $this->assertEquals("userId", $seller->getUserId());
    }
}