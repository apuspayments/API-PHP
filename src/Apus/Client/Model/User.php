<?php
namespace Apus\Client\Model;

use Apus\Json\JsonValueMapper;

/**
 * Contains details of the buyer or seller user
 */
class User implements JsonValueMapper {
    
    private $address;
    
    private $id;
    
    public function getAddress() : string {
        return $this->address;
    }
    
    public function getId() : string {
        return $this->id;
    }
    
    public function updateValues(\stdClass $json) {
        $this->address = $json->address;
        $this->id = $json->userId;
    }
    
    public function setAddress(string $address) {
        $this->address = $address;
    }

    public function setId(string $id) {
        $this->id = $id;
    }


    
}