<?php
namespace ApusPayments\Client\Response;

use ApusPayments\Json\JsonValueMapper;

class Checkout implements JsonValueMapper {
    
    /**
     * @var Buyer 
     */
    private $buyer;
    
    /**
     * @var Coin
     */
    private $coin;
    
    /**
     * @var Currency
     */
    private $currency;
    
    /**
     * @var \DateTime
     */
    private $date;
    
    /**
     * @var string 
     */
    private $id;
    
    /**
     * @var Seller
     */
    private $seller;
    
    /**
     * @var string
     */
    private $txId;
    
    /**
     * {@inheritDoc}
     * @see \ApusPayments\Json\JsonValueMapper::updateValues()
     */
    public function updateValues(\stdClass $json) {
        if(property_exists($json, "buyer")) {
            $buyer = new Buyer();
            $buyer->updateValues($json->buyer);
            $this->setBuyer($buyer);
        }
        
        if(property_exists($json, "coin")) {
            $coin = new Coin();
            $coin->updateValues($json->coin);
            $this->setCoin($coin);
        }
        
        if(property_exists($json, "currency")) {
            $currency = new Currency();
            $currency->updateValues($json->currency);
            $this->setCurrency($currency);
        }
        
        if(property_exists($json, 'date')) $date = \DateTime::createFromFormat(\DateTime::ISO8601, $json->date);
        
        if(property_exists($json, 'seller')) {
            $seller = new Seller();
            $seller->updateValues($json->seller);
        }
        
        if(property_exists($json, 'date'))  $this->setDate($date);
        if(property_exists($json, 'id')) $this->setId($json->id);
        if(property_exists($json, 'seller')) $this->setSeller($seller);
        if(property_exists($json, 'txId')) $this->setTxId($json->txId);
    }
    
    /**
     * @return \ApusPayments\Client\Response\Buyer
     */
    public function getBuyer() : Buyer {
        return $this->buyer;
    }

    /**
     * @param \ApusPayments\Client\Response\Buyer $buyer
     */
    public function setBuyer(Buyer $buyer) {
        $this->buyer = $buyer;
    }

    /**
     * @return \ApusPayments\Client\Response\Coin
     */
    public function getCoin() : Coin {
        return $this->coin;
    }

    /**
     * @param \ApusPayments\Client\Response\Coin $coin
     */
    public function setCoin(Coin $coin) {
        $this->coin = $coin;
    }

    /**
     * @return \ApusPayments\Client\Response\Currency
     */
    public function getCurrency() : Currency {
        return $this->currency;
    }

    /**
     * @param \ApusPayments\Client\Response\Currency $currency
     */
    public function setCurrency(Currency $currency) {
        $this->currency = $currency;
    }

    /**
     * @return \DateTime
     */
    public function getDate() : \DateTime {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date) {
        $this->date = $date;
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

    /**
     * @return \ApusPayments\Client\Response\Seller
     */
    public function getSeller() : Seller {
        return $this->seller;
    }

    /**
     * @param \ApusPayments\Client\Response\Seller $seller
     */
    public function setSeller(Seller $seller) {
        $this->seller = $seller;
    }

    /**
     * @return string
     */
    public function getTxId() : string {
        return $this->txId;
    }

    /**
     * @param string $txId
     */
    public function setTxId(string $txId) {
        $this->txId = $txId;
    }
}