<?php

/**
 *
 * @copyright 2014 company ltd. (www.company.com)
 * @author himanshu patel <hp4137@gmail.com>
 * @package MerchantTransactionsReport
 * @version 1.0
 *
 * DataSourceInterface Interface Declare the interface 'DataSourceInterface'
 *
 */
interface DataSourceInterface {

    public function getData();

    public function setData($data);

    public function getTransactionsByMerchantId($merchantId);
}
