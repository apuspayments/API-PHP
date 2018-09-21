<?php
namespace Apus\Client\Platform;

use Apus\Client\Model\Vendor;
use Psr\Http\Message\ResponseInterface;
use Apus\Client\Model\SearchResult;

class Platform {

    private $environment;
    
    private $httpClient;
    
    private $parameters = array();
    
    public function __construct(Environment $environment) {
        $this->environment = $environment;
        $this->httpClient = new \GuzzleHttp\Client();
    }
    
    public function withTransactionId(string $transactionId) : Platform {
        $this->parameters['txId'] = $transactionId;
        return $this;
    }
    
    public function withTimestamp(\DateTime $dateTime) : Platform {
        $this->parameters['timestamp'] = $dateTime->format();
        return $this;
    }
    
    public function withBlockchain(string $blockchain) : Platform {
        $this->parameters['blockchain'] = $blockchain;
        return $this;
    }
    
    public function withCurrency(string $currency) : Platform {
        $this->parameters['currency'] = $currency;
        return $this;
    }
    
    public function withCriptoCoinAmount(string $coinAmount) : Platform {
        $this->parameters['coinAmount'] = $coinAmount;
        return $this;
    }
    
    public function withCurrencyAmount(string $currencyAmount) : Platform {
        $this->parameters['currencyAmount'] = $currencyAmount;
        return $this;
    }
    
    public function withBuyer(string $buyer) : Platform {
        $this->parameters['buyer'] = $buyer;
        return $this;
    }
    
    public function search(Vendor $vendor) {
        $allowed = array(
            'txId',
            'timestamp',
            'blockchain',
            'currency',
            'coinAmount',
            'currencyAmount',
            'buyer'
        );
        
        $url = "{$this->environment->getURL()}/checkout/{$vendor->getVendorKey()}";
        $options = array("query" => $this->getParameters($allowed));
        $response = $this->httpClient->request('GET', $url, $options);
        
        $json = $this->checkResponseBody($response);
        $results = array();
        
        foreach($json->data as $data) {
            $searchResult = new SearchResult();
            $searchResult->updateValues($data);
            
            $results[] = $searchResult;     
        }
        
        return $results;
    }
    
    private function getParameters(array $allowed) : array {
        $r = array();
        
        foreach($this->parameters as $key => $value) {
            if(in_array($key, $allowed)) {
                $r[$key] = $value;
            }
        }
        
        $this->parameters = array();
        
        return $r;
    }
    
    private function checkResponseBody(ResponseInterface $response) : \stdClass {
        return json_decode($response->getBody());
    }
}
