<?php
namespace ApusTest\Client\Model;

use PHPUnit\Framework\TestCase;
use Apus\Client\Platform\Platform;
use Apus\Client\Model\Vendor;
use Apus\Client\Platform\Environment;
use Apus\Client\Model\User;
use Apus\Client\Model\CriptoCoin;
use Apus\Client\Model\Currency;

class SearchResultTest extends TestCase {
    
    public function testValues() {
        $platform = new Platform(Environment::sandbox());
        $vendor = new Vendor("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        $results = $platform->search($vendor);
        $s = $results[0];
        
        $this->assertContainsOnly('Apus\Client\Model\SearchResult', $results);
        
        $this->assertEquals('05e75c97-6c75-43e6-ac9f-02205707a364', $s->getId());
        $this->assertEquals('2bf779e2a311c2629df977b0bb105879411fd71f5839972c4ed1d3278f80170f', $s->getTransactionId());
        
        $buyer = new User();
        $buyer->setAddress("QWKKEKRbRf2XrsbdQ8Cd5cgLxY7B6CGP37");
        $buyer->setId("43de9565-943e-49ff-b808-82d54a87199f");
        
        $this->assertEquals($buyer, $s->getBuyer());
        
        $coin = new CriptoCoin();
        $coin->setCoinName(CriptoCoin::LTC);
        $coin->setFee(0.00054);
        $coin->setAmount(0.04494037);
        
        $this->assertEquals($coin, $s->getCoin());
        
        $currency = new Currency();
        $currency->setAmount(10.00);
        $currency->setName(Currency::BRL);
        
        $this->assertEquals($currency, $s->getCurrency());
        $this->assertEquals(\DateTime::createFromFormat(\DateTime::ISO8601, '2018-09-10T23:11:03-03:00'), $s->getDate());
        
        $seller = new User();
        $seller->setAddress("QbTaFSttxH4SfvTKoB14EKapWjk5Da5di2");
        $seller->setId("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        $this->assertEquals($seller, $s->getSeller());
    }
}
