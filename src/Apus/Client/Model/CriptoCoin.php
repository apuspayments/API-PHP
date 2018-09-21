<?php
namespace Apus\Client\Model;

/**
 * Cryptocurrency used in the transaction, 
 * includes the amount and rate charged by the network (blockchain) to deal.
 * Contains a list of supported cripto-coins
 *
 */
class CriptoCoin {
 
    private $coinName;
    
    private $amount;
    
    private $fee;
    
    const ETH = 'ETH';
    const BTC = 'BTC';
    
    public function __construct(string $coinName, float $amount, float $fee) {
        $this->coinName = $coinName;
        $this->amount = $amount;
        $this->fee = $fee;
    }
}