<?php
namespace Apus\Client\Model;

class Vendor {
    
    private $vendorKey;
    
    public function __construct(string $vendorKey) {
        $this->vendorKey = $vendorKey;
    }
    
    public function getVendorKey() {
        return $this->vendorKey;
    }
}