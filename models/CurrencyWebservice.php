<?php

/**
 *
 * @copyright 2014 company ltd. (www.company.com)
 * @author himanshu patel <hp4137@gmail.com>
 * @package MerchantTransactionsReport
 * @version 1.0
 *
 * CurrencyWebservice Class responsible to get currency exchange rate
 *
 */

class CurrencyWebservice
{

    /**
     * @todo return live currency exchange rate using rate-exchange API.
     *
     */
    public function getExchangeRate($fromCurrency, $toCurrency)
    {
        $url = "http://rate-exchange.appspot.com/currency?from=".$fromCurrency."&to=".$toCurrency;
        $get = explode(",",file_get_contents($url));
        $data = explode(":",$get[1]);
        return (float) $data[1];
    }
}