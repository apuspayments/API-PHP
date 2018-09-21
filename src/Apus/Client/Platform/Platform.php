<?php
namespace Apus\Client\Platform;

use Apus\Client\Model\Vendor;

class Platform {

    private $environment;
    
    private $httpClient;
    
    public function __construct(Environment $environment) {
        $this->environment = $environment;
        $this->httpClient = new \GuzzleHttp\Client();
    }
    
    public function search(Vendor $vendor) {
        $url = "{$this->environment->getURL()}/checkout/{$vendor->getVendorKey()}";
        $response = $this->httpClient->request('GET', $url);
        
        return $response->getBody();
    }
}
