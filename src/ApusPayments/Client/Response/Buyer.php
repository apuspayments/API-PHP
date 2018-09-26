<?php
namespace ApusPayments\Client\Response;

use ApusPayments\Json\JsonValueMapper;

class Buyer implements JsonValueMapper {

    /**
     * @var string
     */
    private $address;
    
    /**
     * @var string
     */
    private $userId;
    
    /**
     * {@inheritDoc}
     * @see \ApusPayments\Json\JsonValueMapper::updateValues()
     */
    public function updateValues(\stdClass $json) {
        $this->setAddress($json->address);
        $this->setUserId($json->userId);
    }
    
    /**
     * @return string
     */
    public function getAddress() : string {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address) {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getUserId() : string {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(string $userId) {
        $this->userId = $userId;
    }
}