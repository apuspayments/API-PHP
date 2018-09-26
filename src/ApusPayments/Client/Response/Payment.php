<?php
namespace ApusPayments\Client\Response;

use ApusPayments\Json\JsonValueMapper;

class Payment implements JsonValueMapper {
    
    /**
     * @var Status
     */
    private $status;
    
    /**
     * @var PaymentDetail[]
     */
    private $data;
    /**
     * {@inheritDoc}
     * @see \ApusPayments\Json\JsonValueMapper::updateValues()
     */
    public function updateValues(\stdClass $json) {
        $status = new Status();
        $status->updateValues($json->status);
        
        $paymentDetails = array();
        
        foreach($json->data as $data) {
            $paymentDetail = new PaymentDetail();
            $paymentDetail->updateValues($data);
            
            $paymentDetails[] = $paymentDetail;
        }
        
        $this->setStatus($status);
        $this->setData($paymentDetails);
    }
    
    /**
     * @return \ApusPayments\Client\Response\Status
     */
    public function getStatus() : Status {
        return $this->status;
    }

    /**
     * @param \ApusPayments\Client\Response\Status $status
     */
    public function setStatus(Status $status) {
        $this->status = $status;
    }

    /**
     * @return multitype:\ApusPayments\Client\Response\PaymentDetail 
     */
    public function getData() {
        return $this->data;
    }

    /**
     * @param multitype:\ApusPayments\Client\Response\PaymentDetail  $data
     */
    public function setData($data) {
        $this->data = $data;
    }
}