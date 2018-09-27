<?php
namespace ApusPayments\Client\Response;

use ApusPayments\Json\JsonValueMapper;

class Transaction implements JsonValueMapper {
    
    /**
     * @var string
     */
    private $txId;
    
    /**
     * @var int
     */
    private $timestamp;
    
    /**
     * @var string
     */
    private $buyer;
    
    /**
     * {@inheritDoc}
     * @see \ApusPayments\Json\JsonValueMapper::updateValues()
     */
    public function updateValues(\stdClass $json) {
        $buyer = new Buyer();
        $buyer->updateValues($json->buyer);
        
        $this->setBuyer($buyer);
        $this->setTimestamp($json->timestamp);
        $this->setTxId($json->txId);
    }
    
    /**
     * @return string
     */
    public function getTxId() : string {
        return $this->txId;
    }

    /**
     * @param string $txId
     */
    public function setTxId(string $txId) {
        $this->txId = $txId;
    }

    /**
     * @return number
     */
    public function getTimestamp() : int {
        return $this->timestamp;
    }

    /**
     * @param number $timestamp
     */
    public function setTimestamp(int $timestamp) {
        $this->timestamp = $timestamp;
    }

    /**
     * @return string
     */
    public function getBuyer() : Buyer {
        return $this->buyer;
    }

    /**
     * @param string $buyer
     */
    public function setBuyer(Buyer $buyer) {
        $this->buyer = $buyer;
    }
}