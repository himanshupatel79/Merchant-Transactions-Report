<?php

/**
 *
 * @copyright 2014 company ltd. (www.company.com)
 * @author himanshu patel <hp4137@gmail.com>
 * @package MerchantTransactionsReportTest
 * @version 1.0
 *
 * MockTransactionTable Class required to do the unitary tests
 *
 */

class MockTransactionTable extends TransactionTable{

    public function getData()
    {
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }
}