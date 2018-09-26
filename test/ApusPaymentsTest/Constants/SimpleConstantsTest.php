<?php
namespace ApusPaymentsTest\Constants;

use PHPUnit\Framework\TestCase;

class SimpleConstantsTest extends TestCase {
    
    public function testBlockChainType() {
        $constantList = array(
            "BTC",
            "DCR",
            "ETH",
            "LTC",
        );
        
        foreach($constantList as $constant) {
            $this->assertTrue($this->checkConstantExists("ApusPayments\Constants\BlockChainType", $constant), "Check $constant constant");
        }
    }
    
    public function testCurrencyType() {
        $constantList = array(
            "BRL",
            "CAD",
            "CNY",
            "EUR",
            "JPY",
            "USD",
        );
        
        foreach($constantList as $constant) {
            $this->assertTrue($this->checkConstantExists("ApusPayments\Constants\CurrencyType", $constant), "Check $constant constant");
        }
    }
    
    public function testPeriodType() {
        $constantList = array(
            "D",
            "W",
            "M",
            "Y",
        );
        
        foreach($constantList as $constant) {
            $this->assertTrue($this->checkConstantExists("ApusPayments\Constants\PeriodType", $constant), "Check $constant constant");
        }
    }
    
    private function checkConstantExists($class, $name){
        return defined("$class::$name");
    }

}