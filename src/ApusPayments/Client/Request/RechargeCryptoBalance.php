<?php
namespace ApusPayments\Client\Request;

class RechargeCryptoBalance implements \JsonSerializable {
    
    /**
     * SHA256 card number.Note: case insensitive
     * @var string
     */
    private $pan;
    
    /**
     * SHA256 card password (sent by email). Note: case insensitive
     * @var string
     */
    private $password;
    
    /**
     * It defines which cryptocurrency the transaction will use,
     * this determines in which blockchain the transaction will be registered
     * Valid values @see \ApusPayments\Constants\BlockChainType
     * @var string
     */
    private $blockchain;
    
    /**
     * Amount to be transferred, the currency used is defined in the "currency" property
     * @var float
     */
    private $amount;
    
    /**
     * Symbol of the currency used in the transfer, the amount is defined in the property "amount"
     * Valid values @see \ApusPayments\Constants\CurrencyType
     * @var string
     */
    private $currency;
    
    /**
     * Merchant identification, generated through the merchant account on the https://ApusPayments.com
     * @var string
     */
    private $vendorKey;
    
    /**
     * {@inheritDoc}
     * @see \JsonSerializable::jsonSerialize()
     */
    public function jsonSerialize() {
        return array(
            "amount" => $this->getAmount(),
            "blockchain" => $this->getBlockchain(),
            "currency" => $this->getCurrency(),
            "pan" => $this->getPan(),
            "password" => $this->getPassword(),
            "vendorKey" => $this->getVendorKey(),
        );
    }
    
    /**
     * @return string
     */
    public function getPan() : string {
        return $this->pan;
    }
    
    /**
     * @param string $pan
     */
    public function setPan(string $pan) {
        $this->pan = $pan;
    }
    
    /**
     * @return string
     */
    public function getPassword() : string {
        return $this->password;
    }
    
    /**
     * @param string $password
     */
    public function setPassword(string $password) {
        $this->password = $password;
    }
    
    /**
     * @return string
     */
    public function getBlockchain() : string {
        return $this->blockchain;
    }
    
    /**
     * @param string $blockchain
     */
    public function setBlockchain(string $blockchain) {
        $this->blockchain = $blockchain;
    }
    
    /**
     * @return number
     */
    public function getAmount() : float {
        return $this->amount;
    }
    
    /**
     * @param number $amount
     */
    public function setAmount(float $amount) {
        $this->amount = $amount;
    }
    
    /**
     * @return string
     */
    public function getCurrency() : string {
        return $this->currency;
    }
    
    /**
     * @param string $currency
     */
    public function setCurrency(string $currency) {
        $this->currency = $currency;
    }
    
    /**
     * @return string
     */
    public function getVendorKey() : string {
        return $this->vendorKey;
    }
    
    /**
     * @param string $vendorKey
     */
    public function setVendorKey(string $vendorKey) {
        $this->vendorKey = $vendorKey;
    }
}