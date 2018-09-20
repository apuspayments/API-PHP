<?php
namespace Apus\Client\Model;

/**
 * Authentication instances hold pin and password values (sha256).
 */
class Authentication {

    /**
     * @var string
     */
    private $pin;
    
    /**
     * @var string
     */
    private $password;
    
    public function __construct(string $pin, string $password)  {
        $this->pin = hash("sha256", $pin); 
        $this->password = hash("sha256", $password);
    }
}