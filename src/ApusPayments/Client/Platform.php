<?php
namespace ApusPayments\Client;

use ApusPayments\Client\Request\CancelPayment;
use ApusPayments\Client\Request\MakePayment;
use ApusPayments\Client\Request\MakeRecurringPayment;
use ApusPayments\Client\Request\RechargeCryptoBalance;
use ApusPayments\Client\Request\SearchPayment;
use ApusPayments\Client\Response\Checkout;
use ApusPayments\Client\Response\Payment;
use ApusPayments\Constants\Environment;
use Psr\Http\Message\ResponseInterface;

class Platform {
    
    /**
     * @var Environment
     */
    private $environment;
    
    /**
     * @var \GuzzleHttp\Client
     */
    private $httpClient;
    
    public function __construct(Environment $environment) {
        $this->environment = $environment;
        $this->httpClient = new \GuzzleHttp\Client();
    }
    
    public function makePayment(MakePayment $makePayment) : Checkout {
        $url = "{$this->environment->getBaseURI()}/checkout";
        
        $options = array(
            "json" => $makePayment->jsonSerialize(),
            "headers" => $this->getHeaders(),
        );
        
        $response = $this->httpClient->request('POST', $url, $options);
        
        $json = $this->checkResponseBody($response);
        
        $checkout = new Checkout();
        $checkout->updateValues($json);
        
        return $checkout;
    }
    
    public function makeRecurringPayment(MakeRecurringPayment $makeRecurringPayment) : Checkout {
        return new Checkout();
    }
    
    public function searchPayment(SearchPayment $searchPayment) : Payment {
        $url = "{$this->environment->getBaseURI()}/checkout/{$searchPayment->getVendorKey()}";
        
        $options = array(
            "query" => array(),
            "headers" => $this->getHeaders(),
        );
        
        $response = $this->httpClient->request('GET', $url, $options);
        
        $json = $this->checkResponseBody($response);
        
        $payment = new Payment();
        $payment->updateValues($json);
        
        return $payment;
    }
    
    public function cancelPayment(CancelPayment $cancelPayment) : Checkout {
        return new Checkout();
    }
    
    public function rechargeCryptoBalance(RechargeCryptoBalance $rechargeCryptoBalance) : Checkout {
        $url = "{$this->environment->getBaseURI()}/checkin";
        
        $options = array(
            "json" => $rechargeCryptoBalance->jsonSerialize(),
            "headers" => $this->getHeaders(),
        );
        
        $response = $this->httpClient->request('POST', $url, $options);
        
        $json = $this->checkResponseBody($response);
        
        $checkout = new Checkout();
        $checkout->updateValues($json);
        
        return $checkout;
    }
    
    private function getHeaders() : array {
        return array(
            "Accept" => "application/json",
            "ContentType" => "application/json",
        );
    }
    
    private function checkResponseBody(ResponseInterface $response) : \stdClass {
        return json_decode($response->getBody());
    }
}