<?php
namespace ApusPayments\Client\Response;

use ApusPayments\Json\JsonValueMapper;

class Details implements JsonValueMapper {
    
    /**
     * @var string
     */
    private $location;
    
    /**
     * @var string
     */
    private $param;
    
    /**
     * @var string
     */
    private $msg;
    
    /**
     * {@inheritDoc}
     * @see \ApusPayments\Json\JsonValueMapper::updateValues()
     */
    public function updateValues(\stdClass $json) {
        $this->setLocation($json->location);
        $this->setParam($json->param);
        $this->setMsg($json->msg);
    }
    
    /**
     * @return string
     */
    public function getLocation() : string {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location) {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getParam() : string {
        return $this->param;
    }

    /**
     * @param string $param
     */
    public function setParam(string $param) {
        $this->param = $param;
    }

    /**
     * @return string
     */
    public function getMsg() : string {
        return $this->msg;
    }

    /**
     * @param string $msg
     */
    public function setMsg(string $msg) {
        $this->msg = $msg;
    }    
}