<?php

/**
 *
 * @copyright 2014 company ltd. (www.company.com)
 * @author himanshu patel <hp4137@gmail.com>
 * @package MerchantTransactionsReportTest
 * @version 1.0
 *
 * MockCurrencyWebservice Class required to do the unitary tests
 *
 */
class MockCurrencyWebservice extends CurrencyWebservice 
{

    public function getExchangeRate($fromCurrency, $toCurrency) {
        return 1.2;
    }

}
