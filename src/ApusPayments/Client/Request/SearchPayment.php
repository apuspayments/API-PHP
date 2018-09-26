<?php
namespace ApusPayments\Client\Request;

class SearchPayment implements \JsonSerializable {

    /**
     * Merchant identification, generated through the merchant account on the https://ApusPayments.com
     * @var string
     */
    private $vendorKey;
    
    /**
     * Transaction identifier
     * @var string
     */
    private $txId;
    
    /**
     * Date in timestamp format
     * @var string
     */
    private $timestamp;
    
    /**
     * It defines which cryptocurrency the transaction will use,
     * this determines in which blockchain the transaction will be registered
     * Valid values @see \ApusPayments\Constants\BlockChainType
     * @var string
     */
    private $blockchain;
    
    /**
     * Symbol of the currency used in the transfer, the amount is defined in the property "amount"
     * Valid values @see \ApusPayments\Constants\CurrencyType
     * @var string
     */
    private $currency;
    
    /**
     * Amount in the crypto format
     * @var string
     */
    private $coinAmount;
    
    /**
     * Amount in the currency format
     * @var string
     */
    private $currencyAmount;
    
    /**
     * Buyer identifier
     * @var string
     */
    private $buyer;
    
    /**
     * {@inheritDoc}
     * @see \JsonSerializable::jsonSerialize()
     */
    public function jsonSerialize() {
        return array();
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

    /**
     * @return string
     */
    public function getTimestamp() : string {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     */
    public function setTimestamp(string $timestamp) {
        $this->timestamp = $timestamp;
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
    public function getCoinAmount() : string {
        return $this->coinAmount;
    }

    /**
     * @param string $coinAmount
     */
    public function setCoinAmount(string $coinAmount) {
        $this->coinAmount = $coinAmount;
    }

    /**
     * @return string
     */
    public function getCurrencyAmount() : string {
        return $this->currencyAmount;
    }

    /**
     * @param string $currencyAmount
     */
    public function setCurrencyAmount(string $currencyAmount) {
        $this->currencyAmount = $currencyAmount;
    }

    /**
     * @return string
     */
    public function getBuyer() : string {
        return $this->buyer;
    }

    /**
     * @param string $buyer
     */
    public function setBuyer(string $buyer) {
        $this->buyer = $buyer;
    }    
}