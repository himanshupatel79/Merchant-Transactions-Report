<?php

/**
 *
 * @copyright 2014 company ltd. (www.company.com)
 * @author himanshu patel <hp4137@gmail.com>
 * @package MerchantTransactionsReport
 * @version 1.0
 *
 * CurrencyConverter Class to use CurrencyWebservice
 *
 */

class CurrencyConverter
{
    public static $currencies = array(
                    'GBP' => array('iso_code' => 'GBP', 'sign' => '£'),
                    'EUR' => array('iso_code' => 'EUR', 'sign' => '€'),
                    'USD' => array('iso_code' => 'USD', 'sign' => '$')
                );

    /** @var  \CurrencyWebservice */
    protected $currencyService;


    public function __construct(CurrencyWebservice $currencyWebservice)
    {
        $this->setCurrencyService($currencyWebservice);
    }


    /**
     * @param $amount
     * @param $fromCurrency
     * @param $toCurency
     * @return float
     */
    public function convert($amount, $fromCurrency, $toCurency)
    {
        $rate = $this->getCurrencyService()->getExchangeRate($fromCurrency, $toCurency);

        return ($amount*$rate);
    }

    /**
     * @param mixed $currencyService
     */
    public function setCurrencyService($currencyService)
    {
        $this->currencyService = $currencyService;
    }

    /**
     * @return CurrencyWebservice
     */
    public function getCurrencyService()
    {
        return $this->currencyService;
    }
}