<?php
namespace ApusPayments\Client\Request;

class MakeRecurringPayment implements \JsonSerializable {
    
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
     * Type of period that payment or payment schedule occurs
     * Valid values @see \ApusPayments\Constants\PeriodType
     * @var string
     */
    private $period;
    
    /**
     * Required Frequency in which the payment/scheduling must be performed, 
     * works in conjunction with the type of payment/scheduling period
     * @var int
     */
    private $frequency;
    
    /**
     * Flag to inform if payment will be executed immediately or will be scheduled only
     * @var bool
     */
    private $execute;
    
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
        return array();
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