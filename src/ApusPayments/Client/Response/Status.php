<?php
namespace ApusPayments\Client\Response;

use Apus\Json\JsonValueMapper;

class Status implements JsonValueMapper {
    
    /**
     * @var string
     */
    private $code;
    
    /**
     * @var string
     */
    private $message;
    
    /**
     * @var Details
     */
    private $details;
    
    /**
     * {@inheritDoc}
     * @see \Apus\Json\JsonValueMapper::updateValues()
     */
    public function updateValues(\stdClass $json) {
        
    }
    
    /**
     * @return string
     */
    public function getCode() : string {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code) {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getMessage() : string {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message) {
        $this->message = $message;
    }

    /**
     * @return \ApusPayments\Client\Response\Details
     */
    public function getDetails() : string {
        return $this->details;
    }

    /**
     * @param \ApusPayments\Client\Response\Details $details
     */
    public function setDetails(string $details) {
        $this->details = $details;
    }

    
    

    
}