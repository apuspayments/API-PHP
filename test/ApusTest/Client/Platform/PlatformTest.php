<?php
namespace ApusTest\Client\Platform;

use PHPUnit\Framework\TestCase;
use Apus\Client\Platform\Platform;
use Apus\Client\Platform\Environment;
use Apus\Client\Model\Vendor;
use Apus\Client\Model\SaleSpecification;
use Apus\Client\Model\CriptoCoin;
use Apus\Client\Model\Currency;

class PlatformTest extends TestCase {
    
    public function testSearch() {
        $platform = new Platform(Environment::sandbox());
        $vendor = new Vendor("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        $results = $platform->search($vendor);
        
        $this->assertContainsOnly('Apus\Client\Model\SearchResult', $results);
        $this->assertGreaterThan(50, $results);
        print count($results);
    }
    
    public function testSearchWithTransactionId() {
        $this->markTestSkipped("Query parameters are not a reality");
        $platform = new Platform(Environment::sandbox());
        $vendor = new Vendor("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        $transactionId = 'f276c821ef4eb06616d7837b4498a38c5c8fb36734cf3c5f5c3ba6b2e7f35b1d';
        $results = $platform->withTransactionId($transactionId)->search($vendor);
        
        $this->assertContainsOnly('Apus\Client\Model\SearchResult', $results);
        $this->assertCount(1, $results);
    }
    
    public function testCheckout() {
        $spec = new SaleSpecification();
        
        $spec->withPan("0866a6eaea5cb085e4cf6ef19296bf19647552dd5f96f1e530db3ae61837efe7")
            ->withPassword("c66f1f34f49381e467d3abd43c77947f5d1dd362fd0eec6c2c1f27233ae9adf9")
            ->withCriptoCoinName(CriptoCoin::LTC)
            ->withCurrencyAmount(213.88)
            ->withCurrencyName(Currency::BRL)
            ->withVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        
        $platform = new Platform(Environment::sandbox());
        
        $platform->checkout($spec);
    }
}