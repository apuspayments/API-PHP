<?php
namespace ApusPaymentsTest\Client\Response;

use PHPUnit\Framework\TestCase;
use ApusPayments\Client\Response\Status;
use ApusPayments\Client\Response\Details;

class StatusTest extends TestCase {
    
    public function testUpdateValues() {
        $data = new \stdClass();
        $data->code = '012';
        $data->message = 'message';
        $data->details = new \stdClass();
        $data->details->location = 'location';
        $data->details->param = 'param';
        $data->details->msg = 'msg';
        
        $status = new Status();
        $status->updateValues($data);
        
        $status->getCode();
        $status->getMessage();
        $status->getDetails();
        
        $details = new Details();
        $details->setLocation('location');
        $details->setParam('param');
        $details->setMsg('msg');
        
        $this->assertEquals($details, $status->getDetails());
        $this->assertEquals('012', $status->getCode());
        $this->assertEquals('message', $status->getMessage());
    }
}