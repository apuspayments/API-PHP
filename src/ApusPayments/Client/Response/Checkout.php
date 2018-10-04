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
     * @var Seller
     */
    private $seller;
    
    /**
     * @var Transaction
     */
    private $transaction;
    
    /**
     * {@inheritDoc}
     * @see \ApusPayments\Json\JsonValueMapper::updateValues()
     */
    public function updateValues(\stdClass $json) {  
        if (property_exists($json, "coin")) {
            $coin = new Coin();
            $coin->updateValues($json->coin);
            $this->setCoin($coin);
        }
        
        if (property_exists($json, "currency")) {
            $currency = new Currency();
            $currency->updateValues($json->currency);
            $this->setCurrency($currency);
        }

        if (property_exists($json, "transaction")) {
            $transaction = new Transaction();
            $transaction->updateValues($json->transaction);
            $this->setTransaction($transaction);
        }

        if (property_exists($json, "buyer")) {
            $buyer = new Buyer();
            $buyer->updateValues($json->buyer);
            $this->setBuyer($buyer);            
        }

        if (property_exists($json, 'seller')) {
            $seller = new Seller();
            $seller->updateValues($json->seller);
            $this->setSeller($seller);
        }
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
     * @return \ApusPayments\Client\Response\Transaction
     */
    public function getTransaction() : Transaction {
        return $this->transaction;
    }

    /**
     * @param \ApusPayments\Client\Response\Transaction $transaction
     */
    public function setTransaction(Transaction $transaction) {
        return $this->transaction = $transaction;
    }
}