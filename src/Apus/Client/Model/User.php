<?php
namespace Apus\Client\Model;

/**
 * Contains details of the buyer or seller user
 */
class User {
    
    private $address;
    
    private $id;
    
    public function __construct(string $address, string $id) {
        $this->address = $address;
        $this->id = $id;
    }
    
    public function getAddress() : string {
        return $this->address;
    }
    
    public function getId() : string {
        return $this->id;
    }
}