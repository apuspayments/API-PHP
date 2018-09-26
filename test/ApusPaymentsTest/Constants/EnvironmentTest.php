<?php
namespace ApusPaymentsTest\Constants;

use PHPUnit\Framework\TestCase;
use ApusPayments\Constants\Environment;

class EnvironmentTest extends TestCase {
    
    public function testSandbox() {
        $env = Environment::sandbox();
        $this->assertEquals("https://sandbox.apuspayments.com/v1", $env->getBaseURI());
    }
    
    public function testProduction() {
        $env = Environment::production();
        $this->assertEquals("https://api.apuspayments.com/v1", $env->getBaseURI());
    }
}