<?php

/**
 *
 * @copyright 2014 company ltd. (www.company.com)
 * @author himanshu patel <hp4137@gmail.com>
 * @package MerchantTransactionsReportTest
 * @version 1.0
 *
 * TransactionTableTest Class
 * @covers TransactionTable
 *
 */
class TransactionTableTest extends PHPUnit_Framework_TestCase 
{

    /**
     * @covers TransactionTable::openFile
     */
    public function testOpenFile() {
        $filePath = "data.csv";
        $transactionTable = new TransactionTable();

        $this->assertTrue(!is_null($transactionTable->openFile($filePath)));
    }

}
