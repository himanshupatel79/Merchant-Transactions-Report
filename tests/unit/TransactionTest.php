<?php

/**
 *
 * @copyright 2014 company ltd. (www.company.com)
 * @author himanshu patel <hp4137@gmail.com>
 * @package MerchantTransactionsReportTest
 * @version 1.0
 *
 * TransactionTest Class
 * @covers TransactionTable
 *
 */
//include_once "../models/Transaction.php";
//include_once("../autoloader.php");


class TransactionTest extends PHPUnit_Framework_TestCase {

    public function setUp() {
        fwrite(STDOUT, __METHOD__ . "\n");
    }

    public function tearDown() {
        fwrite(STDOUT, __METHOD__ . "\n");        
    }

    public function testConnectionIsValid() {
        // test to ensure that the object from an fsockopen is valid
        $transactionObj = new Transaction();

        $this->assertTrue($transactionObj->getCurrencyIsoCode() !== false);
    }

}
