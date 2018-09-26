<?php
namespace ApusPayments\Client\Response;

use Apus\Json\JsonValueMapper;

class Coin implements JsonValueMapper {
    
    /**
     * @var string
     */
    private $name;
    
    /**
     * @var float
     */
    private $amount;
    
    /**
     * @var float
     */
    private $fee;
    /**
     * {@inheritDoc}
     * @see \Apus\Json\JsonValueMapper::updateValues()
     */
    public function updateValues(\stdClass $json) {
        
    }
    
    /**
     * @return string
     */
    public function getName() : string {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name) {
        $this->name = $name;
    }

    /**
     * @return number
     */
    public function getAmount() : float {
        return $this->amount;
    }

    /**
     * @param number $amount
     */
    public function setAmount(float $amount) {
        $this->amount = $amount;
    }

    /**
     * @return number
     */
    public function getFee() : float {
        return $this->fee;
    }

    /**
     * @param number $fee
     */
    public function setFee(float $fee) {
        $this->fee = $fee;
    }
}