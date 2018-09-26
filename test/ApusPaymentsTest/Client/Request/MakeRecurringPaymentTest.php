<?php
namespace ApusPaymentsTest\Client\Request;

use ApusPayments\Client\Request\MakeRecurringPayment;
use PHPUnit\Framework\TestCase;
use ApusPayments\Constants\BlockChainType;
use ApusPayments\Constants\CurrencyType;
use ApusPayments\Constants\PeriodType;

class MakeRecurringPaymentTest extends TestCase {
    
    public function testJsonSerialize() {
        $makeRecurringPayment = new MakeRecurringPayment();
        $makeRecurringPayment->setAmount(199891.98);
        $makeRecurringPayment->setBlockchain(BlockChainType::LTC);
        $makeRecurringPayment->setCurrency(CurrencyType::BRL);
        $makeRecurringPayment->setExecute(true);
        $makeRecurringPayment->setFrequency(12);
        $makeRecurringPayment->setPan("00000-918918918081-919191919");
        $makeRecurringPayment->setPassword("1292");
        $makeRecurringPayment->setPeriod(PeriodType::M);
        $makeRecurringPayment->setVendorKey("19201920192");
        
        $expected = array(
            "amount" => 199891.98,
            "blockchain" => "LTC",
            "currency" => "BRL",
            "execute" => true,
            "frequency" => 12,
            "pan" => "00000-918918918081-919191919",
            "password" => "1292",
            "period" => "M",
            "vendorKey" => "19201920192",
        );
        
        $this->assertEquals($expected, $makeRecurringPayment->jsonSerialize());
    }
}