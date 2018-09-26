<?php
namespace ApusPayments\Client\Response;

use Apus\Json\JsonValueMapper;

class Currency implements JsonValueMapper {
    
    /**
     * @var string
     */
    private $name;
    
    /**
     * @var float
     */
    private $amount;
    
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
}