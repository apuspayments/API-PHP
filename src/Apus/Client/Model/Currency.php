<?php
namespace Apus\Client\Model;

use Apus\Json\JsonValueMapper;

class Currency implements JsonValueMapper {
 
    const BRL = 'BRL';
    const USD = 'USD';
    
    private $name;
    
    private $amount;
    
    public function updateValues(\stdClass $json) {
        $this->amount = $json->amount;
        $this->name = $json->name;
    }
    
    public function getName() : string {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function getAmount() : float{
        return $this->amount;
    }

    public function setAmount(float $amount) {
        $this->amount = $amount;
    }
}