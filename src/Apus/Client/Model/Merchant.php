<?php
namespace Apus\Client\Model;

class Merchant {
    
    private $vendorKey;
    
    public function __construct(string $vendorKey) {
        $this->vendorKey = $vendorKey;
    }
}