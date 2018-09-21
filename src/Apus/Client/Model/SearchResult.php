<?php
namespace Apus\Client\Model;

use Apus\Json\JsonValueMapper;

class SearchResult implements JsonValueMapper {
    
    private $buyer;
    
    private $seller;
    
    private $currency;  
    
    private $coin;
    
    private $date;
    
    private $id;
    
    private $transactionId;
        
        public function updateValues(\stdClass $json) {
            if(property_exists($json, 'id')) $this->id = $json->id;
            if(property_exists($json, 'txId')) $this->transactionId = $json->txId;
            
            $buyer = new User();
            $buyer->updateValues($json->buyer);
            $this->buyer = $buyer;
            
            $seller = new User();
            $seller->updateValues($json->seller);
            $this->seller = $seller;
            
            $cripto = new CriptoCoin();
            $cripto->updateValues($json->coin);
            $this->coin = $cripto;
            
            $currency = new Currency();
            $currency->updateValues($json->currency);
            $this->currency = $currency;
            
            if(property_exists($json, 'date')) $this->date = \DateTime::createFromFormat(\DateTime::ISO8601, $json->date);
        }
        
        public function getBuyer() : User {
            return $this->buyer;
        }
    
        public function getSeller() : User {
            return $this->seller;
        }
    
        public function getCurrency() : Currency {
            return $this->currency;
        }
    
        public function getCoin() : CriptoCoin {
            return $this->coin;
        }
    
        public function getDate() : \DateTime {
            return $this->date;
        }
    
        public function getId() : string {
            return $this->id;
        }
    
        public function getTransactionId() : ?string {
            return $this->transactionId;
        }
}