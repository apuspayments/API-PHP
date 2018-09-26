<?php
namespace ApusPaymentsTest\Client\Response;

use PHPUnit\Framework\TestCase;
use ApusPayments\Client\Response\Schedule;

class ScheduleTest extends TestCase {
    
    public function testUpdateValues() {
        $data = new \stdClass();
        $data->execute = true;
        $data->frequency = 12;
        $data->id = "string";
        $data->period = "string-period";
        
        $schedule = new Schedule();
        $schedule->updateValues($data);
        
        $this->assertEquals(true, $schedule->isExecute());
        $this->assertEquals(12, $schedule->getFrequency());
        $this->assertEquals("string", $schedule->getId());
        $this->assertEquals("string-period", $schedule->getPeriod());
    }
}