<?php
namespace ApusPaymentsTest\Client\Response;

use PHPUnit\Framework\TestCase;
use ApusPayments\Client\Response\Details;

class DetailsTest extends TestCase {
    
    public function testUpdateValues() {
        $data = new \stdClass();
        $data->location = "location-string";
        $data->msg = "msg-string";
        $data->param = "param-string";
        
        $details = new Details();
        $details->updateValues($data);
        
        $this->assertEquals("location-string", $details->getLocation());
        $this->assertEquals("msg-string", $details->getMsg());
        $this->assertEquals("param-string", $details->getParam());
    }
}