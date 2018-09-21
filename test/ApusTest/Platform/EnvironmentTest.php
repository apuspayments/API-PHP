<?php
namespace ApusTest\Client\Platform;

use PHPUnit\Framework\TestCase;
use Apus\Client\Platform\Environment;

class EnvironmentTest extends TestCase {
    
    public function testSandbox() {
        $env = Environment::sandbox();
        $this->assertEquals("https://sandbox.apuspayments.com/v1", $env->getURL());
    }
}