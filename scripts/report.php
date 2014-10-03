<?php

/**
 *
 * @copyright 2014 company ltd. (www.company.com)
 * @author himanshu patel <hp4137@gmail.com>
 * @package MerchantTransactionsReport
 * @version 1.0
 *
 * report.php is a main file to be execute from command line
 *
 */
include_once("../autoloader.php");

//TODO print formatted report

$merchantId = (int) $argv[1];

if (!$merchantId) {
    echo "Error: <merchantId> param missing \n";
    echo "usage: php report.php <merchantId> \n";
    exit(0);
}

/**
 * Source of transactions, can read data.csv directly for simplicty sake,
 * should behave like a database (read only)
 *
 */
$fullDataFilePath = '../data.csv';

// get data source object
$dataSource = new TransactionTable($fullDataFilePath);

// set merchant and data service
$merchant = new Merchant(new TransactionService($dataSource));
$merchant->setId($merchantId);


$reportCurrency = 'GBP';

// pass currencyWebservice dependency to instantiate currency converter
// and currency web service
$currencyConverter = new CurrencyConverter(new CurrencyWebservice);

/*get merchant transactions*/
$merchantTransactions = $merchant->getTransactions();

if (count($merchantTransactions) > 0) {
    echo '----------------------------------------' . "\n";
    echo 'Transactions for MerchantId (' . $merchant->getId() . ') in ' .
    $reportCurrency . "\n";
    echo '----------------------------------------' . "\n";
    echo 'NUMBER'. "\t\t".'DATE'. "\t\t".'AMOUNT'. "\t". "\n";
    echo '----------------------------------------' . "\n";
    
    $i =1;
    
    foreach ($merchantTransactions as $transaction) {
        echo $i . "\t\t";
        echo $transaction->getDate() . "\t";
        $value = $currencyConverter->convert(
                    $transaction->getValue(), 
                    $transaction->getCurrencyIsoCode(), 
                    $reportCurrency
                );
        echo CurrencyConverter::$currencies[$reportCurrency]['sign'] .
        number_format(round($value,2), 2, '.', '') . " \n";
        $i++;
    }
    echo '----------------------------------------' . "\n";
} else {
    echo "This merchant does not have transactions. \n\n";
}