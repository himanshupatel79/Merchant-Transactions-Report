<?php

/**
 *
 * @copyright 2014 company ltd. (www.company.com)
 * @author himanshu patel <hp4137@gmail.com>
 * @package MerchantTransactionsReportTest
 * @version 1.0
 *
 * CurrencyWebserviceTest Class
 * @covers CurrencyWebservice
 *
 */
//include_once "../models/Transaction.php";
//include_once("../autoloader.php");

class CurrencyWebserviceTest extends PHPUnit_Framework_TestCase 
{

    /**
     * @covers CurrencyWebserviceTest::getExchangeRate
     */
    public function testGetExchangeRateReturnsFloatRate() {
        $currencyWebservice = new CurrencyWebservice();
        $fromCurrency = null;
        $toCurrency = null;
        $rate = $currencyWebservice->getExchangeRate($fromCurrency, $toCurrency);

        $this->assertTrue(is_float($rate));
    }

}
