<?php
namespace Apus\Client\Model;

use Apus\Json\JsonValueMapper;

/**
 * Cryptocurrency used in the transaction, 
 * includes the amount and rate charged by the network (blockchain) to deal.
 * Contains a list of supported cripto-coins
 *
 */
class CriptoCoin implements JsonValueMapper {
 
    private $coinName;
    
    private $amount;
    
    private $fee;
    
    const ETH = 'ETH';
    const BTC = 'BTC';
    const LTC = 'LTC';
    
    public function updateValues(\stdClass $json) {
        $this->coinName = $json->name;
        $this->amount = $json->amount;
        $this->fee = $json->fee;
    }
    
    public function getCoinName() : string {
        return $this->coinName;
    }

    public function setCoinName(string $coinName) {
        $this->coinName = $coinName;
    }

    public function getAmount()  : float {
        return $this->amount;
    }

    public function setAmount(float $amount) {
        $this->amount = $amount;
    }

    public function getFee() : float {
        return $this->fee;
    }

    public function setFee(float $fee) {
        $this->fee = $fee;
    }
}