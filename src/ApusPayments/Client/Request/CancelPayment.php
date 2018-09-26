<?php
namespace ApusPayments\Client\Request;

/**
 * Data used to make cancel requests
 */
class CancelPayment implements \JsonSerializable {
    
    /**
     * Transaction identifier in blockchain
     * @var string
     */
    private $txId;

    /**
     * SHA256 seller's administrative password (sent by email). Note: case insensitive
     * @var string
     */
    private $password;
    
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
            "password" => $this->getPassword(),
            "txId" => $this->getTxId(),
            "vendorKey" => $this->getVendorKey(),
        );
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