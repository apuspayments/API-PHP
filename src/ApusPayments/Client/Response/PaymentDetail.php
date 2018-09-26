<?php
namespace ApusPayments\Client\Response;

use Apus\Json\JsonValueMapper;

class PaymentDetail implements JsonValueMapper {
    
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
     * @see \Apus\Json\JsonValueMapper::updateValues()
     */
    public function updateValues(\stdClass $json) {
        
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