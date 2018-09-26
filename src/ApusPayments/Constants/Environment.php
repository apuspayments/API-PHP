<?php
namespace ApusPayments\Constants;

class Environment {
    
    private $protocol;
    
    private $host;
    
    private $version;
    
    private function __construct(string $protocol, string $host, string $version) {
        $this->protocol = $protocol;
        $this->host = $host;
        $this->version = $version;
    }
    
    public function getBaseURI() : string {
        return $this->protocol . "://" . $this->host . "/" . $this->version;
    }
    
    public static function sandbox() : Environment {
        return new Environment("https", "sandbox.apuspayments.com", "v1");
    }
    
    public static function production() : Environment {
        return new Environment("https", "api.apuspayments.com", "v1");
    }
}