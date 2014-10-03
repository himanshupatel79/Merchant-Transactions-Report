<?php

/**
 *
 * @copyright 2014 company ltd. (www.company.com)
 * @author himanshu patel <hp4137@gmail.com>
 * @package MerchantTransactionsReportTest
 * @version 1.0
 *
 * CurrencyConverterTest Class
 * @covers CurrencyConverter
 *
 */
class CurrencyConverterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers CurrencyConverter::convert
     */
    public function testConvert()
    {
        // params
        $expectedValue = 12;
        $amount = 10;
        $fromCurrency = 'EUR';
        $toCurrency = 'GBP';

        $mockCurrencyWebservice = new MockCurrencyWebservice();
        $currencyConverter = new CurrencyConverter($mockCurrencyWebservice);
        $currencyConverter->setCurrencyService($mockCurrencyWebservice);

        $this->assertEquals($currencyConverter->convert($amount, $fromCurrency, $toCurrency), $expectedValue);
    }
}