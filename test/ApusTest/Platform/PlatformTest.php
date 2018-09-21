<?php
namespace ApusTest\Platform;

use PHPUnit\Framework\TestCase;
use Apus\Client\Platform\Platform;
use Apus\Client\Platform\Environment;
use Apus\Client\Model\Vendor;

class PlatformTest extends TestCase {
    
    public function testSearch() {
        $platform = new Platform(Environment::sandbox());
        $vendor = new Vendor("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        $results = $platform->search($vendor);
        
        $this->assertJson($results);
    }
}