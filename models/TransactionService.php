<?php

/**
 *
 * @copyright 2014 company ltd. (www.company.com)
 * @author himanshu patel <hp4137@gmail.com>
 * @package MerchantTransactionsReport
 * @version 1.0
 *
 * TransactionService Class responcible to get and set datasource 
 * and get transactions of specified merchant by id
 *
 */
class TransactionService 
{

    private $dataSource;

    public function __construct(DataSourceInterface $dataSource) {
        $this->setDataSource($dataSource);
    }

    /**
     * @param $merchantId
     * @return array
     */
    public function getTransactionsByMerchantId($merchantId) {
        $result = array();
        $queryResult = $this->getDataSource()->getTransactionsByMerchantId($merchantId);
        if (count($queryResult) > 0) {
            foreach ($queryResult as $resultRow) {
                $transaction = new Transaction();
                $transaction->setMerchantId($resultRow['merchantId']);
                $transaction->setDate($resultRow['date']);
                $transaction->setValue($resultRow['value']);
                $result[] = $transaction;
            }
        }
        return $result;
    }

    /**
     * @param mixed $dataSource
     */
    public function setDataSource($dataSource) {
        $this->dataSource = $dataSource;
    }

    /**
     * @return mixed
     */
    public function getDataSource() {
        return $this->dataSource;
    }
}