<?php
namespace Apus\Client\Model;

class SaleSpecification implements \JsonSerializable {
    
    private $pan;
    
    private $password;
    
    private $blockchain;
    
    private $amount;
    
    private $currency;
    
    private $vendorKey;
    
    public function withPan(string $pan) : SaleSpecification {
        $this->pan = $pan;
        return $this;
    }
    
    public function withPassword(string $password) : SaleSpecification {
        $this->password = $password;
        return $this;
    }
    
    public function withCriptoCoinName(string $coinName) : SaleSpecification {
        $this->blockchain = $coinName;
        return $this;
    }
    
    public function withCurrencyAmount(float $currencyAmount) : SaleSpecification {
        $this->amount = $currencyAmount;
        return $this;
    }
    
    public function withCurrencyName(string $currencyName) : SaleSpecification {
        $this->currency = $currencyName;
        return $this;
    }
    
    public function withVendorKey(string $vendorKey) : SaleSpecification {
        $this->vendorKey = $vendorKey;
        return $this;
    }
    
    public function jsonSerialize() {
        return array(
            'pan' => $this->pan,
            'password' => $this->password,
            'blockchain' => $this->blockchain,
            'amount' => $this->amount,
            'currency' => $this->currency,
            'vendorKey' => $this->vendorKey,
        );
    }
}