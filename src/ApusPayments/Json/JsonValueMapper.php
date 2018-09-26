<?php
namespace Apus\Json;

interface JsonValueMapper {

    /**
     * Updates the object state with values from $json 
     * @param \stdClass $json
     */
    public function updateValues(\stdClass $json);
    
}