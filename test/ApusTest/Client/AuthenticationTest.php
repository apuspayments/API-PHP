<?php
use PHPUnit\Framework\TestCase;
use Apus\Client\Model\Authentication;

class AuthenticationTest extends TestCase {
    
    public function testConstruct() {
        $auth = new Authentication("123456", "mypass");
    }
}