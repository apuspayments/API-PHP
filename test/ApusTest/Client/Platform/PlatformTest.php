<?php
namespace ApusTest\Client\Platform;

use PHPUnit\Framework\TestCase;
use Apus\Client\Platform\Platform;
use Apus\Client\Platform\Environment;
use Apus\Client\Model\Vendor;

class PlatformTest extends TestCase {
    
    public function testSearch() {
        $platform = new Platform(Environment::sandbox());
        $vendor = new Vendor("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        $results = $platform->search($vendor);
        
        $this->assertContainsOnly('Apus\Client\Model\SearchResult', $results);
        $this->assertCount(50, $results);
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
}