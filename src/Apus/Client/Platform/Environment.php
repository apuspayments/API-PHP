<?php
namespace Apus\Client\Platform;

class Environment {
    
    private $protocol;
    
    private $host;
    
    private $version;
    
    private function __construct(string $protocol, string $host, string $version) {
        $this->protocol = $protocol;
        $this->host = $host;
        $this->version = $version;
    }
    
    //TODO: alterar para BaseURI
    public function getURL() : string {
        return $this->protocol . "://" . $this->host . "/" . $this->version;
    }
    
    public static function sandbox() : Environment {
        return new Environment("https", "sandbox.apuspayments.com", "v1");
    }
}