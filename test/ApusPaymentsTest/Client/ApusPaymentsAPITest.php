<?php
namespace ApusPaymentsTest\Client;

use PHPUnit\Framework\TestCase;
use ApusPayments\Constants\Environment;
use ApusPayments\Constants\BlockChainType;
use ApusPayments\Constants\CurrencyType;
use ApusPayments\Constants\PeriodType;
use ApusPayments\Client\ApusPaymentsAPI;
use ApusPayments\Client\Request\MakePayment;
use ApusPayments\Client\Request\MakeRecurringPayment;
use ApusPayments\Client\Request\SearchPayment;
use ApusPayments\Client\Request\CancelPayment;
use ApusPayments\Client\Request\RechargeCryptoBalance;

class ApusPaymentsAPITest extends TestCase {
    
    public function testMakePayment() {
        $apusPaymentsAPI = new ApusPaymentsAPI(Environment::sandbox());

        $makePayment = new MakePayment();

        $makePayment->setAmount(0.01);
        $makePayment->setBlockchain(BlockChainType::LTC);
        $makePayment->setCurrency(CurrencyType::BRL);
        $makePayment->setPan("9999999999999999");
        $makePayment->setPassword("1234");
        $makePayment->setVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        
        $makePaymentResponse = $apusPaymentsAPI->makePayment($makePayment);

        print_r($makePaymentResponse);
    }

    public function testMakeRecurringPayment() {
        $apusPaymentsAPI = new ApusPaymentsAPI(Environment::sandbox());

        $makeRecurringPayment = new MakeRecurringPayment();

        $makeRecurringPayment->setAmount(0.01);
        $makeRecurringPayment->setBlockchain(BlockChainType::LTC);
        $makeRecurringPayment->setCurrency(CurrencyType::BRL);
        $makeRecurringPayment->setPeriod(PeriodType::M);
        $makeRecurringPayment->setFrequency(12);
        $makeRecurringPayment->setExecute(true);
        $makeRecurringPayment->setPan("9999999999999999");
        $makeRecurringPayment->setPassword("1234");
        $makeRecurringPayment->setVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        
        $makeRecurringPaymentResponse = $apusPaymentsAPI->makeRecurringPayment($makeRecurringPayment);

        print_r($makeRecurringPaymentResponse);
    }
    
    public function testSearchPayment() {
        $apusPaymentsAPI = new ApusPaymentsAPI(Environment::sandbox());

        $searchPayment = new SearchPayment();
        $searchPayment->setVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        
        $searchPaymentResponse = $apusPaymentsAPI->searchPayment($searchPayment);
        
        print_r($searchPaymentResponse);
    }

    public function testCancelPayment() {        
        $apusPaymentsAPI = new ApusPaymentsAPI(Environment::sandbox());

        $cancelPayment = new CancelPayment();

        $cancelPayment->setTxId("1234");
        $cancelPayment->setPassword("1234");
        $cancelPayment->setVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        
        $cancelPaymentResponse = $apusPaymentsAPI->cancelPayment($cancelPayment);

        print_r($cancelPaymentResponse);       
    }
    
    public function testRechargeCryptoBalance() {        
        $apusPaymentsAPI = new ApusPaymentsAPI(Environment::sandbox());

        $rechargeCryptoBalance = new RechargeCryptoBalance();

        $rechargeCryptoBalance->setAmount(100000.00);
        $rechargeCryptoBalance->setBlockchain(BlockChainType::LTC);
        $rechargeCryptoBalance->setCurrency(CurrencyType::BRL);
        $rechargeCryptoBalance->setPan("9999999999999999");
        $rechargeCryptoBalance->setPassword("1234");
        $rechargeCryptoBalance->setVendorKey("5f5bdaed-f82b-4b82-b3f5-1d562633da5b");
        
        $rechargeCryptoBalanceResponse = $apusPaymentsAPI->rechargeCryptoBalance($rechargeCryptoBalance);

        print_r($rechargeCryptoBalanceResponse);       
    }
}