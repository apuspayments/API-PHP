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
     * @var string
     */
    private $name;
    
    /**
     * @var string
     */
    private $email;
    
    /**
     * {@inheritDoc}
     * @see \ApusPayments\Json\JsonValueMapper::updateValues()
     */
    public function updateValues(\stdClass $json) {
        if(property_exists($json, 'address')) $this->setAddress($json->address);
        if(property_exists($json, 'userId')) $this->setUserId($json->userId);
        
        if(property_exists($json, 'name')) $this->setName($json->name);
        if(property_exists($json, 'email')) $this->setEmail($json->email);
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
     * @return string
     */
    public function getEmail() : string {
        return $this->email;
    }
    
    /**
     * @param string $email
     */
    public function setEmail(string $email) {
        $this->email = $email;
    }
}