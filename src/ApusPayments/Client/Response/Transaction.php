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
        $this->setBuyer($json->buyer);
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
    public function getBuyer() : string {
        return $this->buyer;
    }

    /**
     * @param string $buyer
     */
    public function setBuyer(string $buyer) {
        $this->buyer = $buyer;
    }
}