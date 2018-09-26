<?php
namespace ApusPayments\Client\Response;

use Apus\Json\JsonValueMapper;

class Schedule implements JsonValueMapper {
    
    /**
     * @var string
     */
    private $period;
    
    /**
     * @var int
     */
    private $frequency;
    
    /**
     * @var bool
     */
    private $execute;
    
    /**
     * @var string
     */
    private $id;
    
    /**
     * {@inheritDoc}
     * @see \Apus\Json\JsonValueMapper::updateValues()
     */
    public function updateValues(\stdClass $json) {
        
    }
    
    /**
     * @return string
     */
    public function getPeriod() : string {
        return $this->period;
    }

    /**
     * @param string $period
     */
    public function setPeriod(string $period) {
        $this->period = $period;
    }

    /**
     * @return number
     */
    public function getFrequency() : int {
        return $this->frequency;
    }

    /**
     * @param number $frequency
     */
    public function setFrequency(int $frequency) {
        $this->frequency = $frequency;
    }

    /**
     * @return boolean
     */
    public function isExecute() : bool {
        return $this->execute;
    }

    /**
     * @param boolean $execute
     */
    public function setExecute(bool $execute) {
        $this->execute = $execute;
    }

    /**
     * @return string
     */
    public function getId() : string {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id) {
        $this->id = $id;
    }
}