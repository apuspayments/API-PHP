<?php
namespace ApusTest\Client\Model;

use Apus\Client\Model\CriptoCoin;
use Apus\Client\Model\Currency;
use Apus\Client\Model\SaleSpecification;
use PHPUnit\Framework\TestCase;

class SaleSpecificationTest extends TestCase {
    
    public function testJsonSerialize() {
        $spec = new SaleSpecification();
        
        $spec->withPan("0866a6eaea5cb085e4cf6ef19296bf19647552dd5f96f1e530db3ae61837efe7")
            ->withPassword("c66f1f34f49381e467d3abd43c77947f5d1dd362fd0eec6c2c1f27233ae9adf9")
            ->withCriptoCoinName(CriptoCoin::LTC)
            ->withCurrencyAmount(213.88)
            ->withCurrencyName(Currency::BRL)
            ->withVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        
        $expected = array(
            "pan" => "0866a6eaea5cb085e4cf6ef19296bf19647552dd5f96f1e530db3ae61837efe7",
            "password" => "c66f1f34f49381e467d3abd43c77947f5d1dd362fd0eec6c2c1f27233ae9adf9",
            "blockchain" => "LTC",
            "amount" => 213.88,
            "currency" => "BRL",
            "vendorKey" => "5f5bdaed-f82b-4b82-b3f5-1d562633da5b"
        ); 
            
        $this->assertEquals($expected, $spec->jsonSerialize());
    }
}