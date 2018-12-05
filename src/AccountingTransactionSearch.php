<?php

namespace Nzolt\NetSuite;

class AccountingTransactionSearch extends SearchRecord
{

    /**
     * @var AccountingTransactionSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var AccountSearchBasic $accountJoin
     */
    protected $accountJoin = null;

    /**
     * @var RevRecScheduleSearchBasic $revRecScheduleJoin
     */
    protected $revRecScheduleJoin = null;

    /**
     * @var TransactionSearchBasic $transactionJoin
     */
    protected $transactionJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountingTransactionSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param AccountingTransactionSearchBasic $basic
     * @return \Nzolt\NetSuite\AccountingTransactionSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return AccountSearchBasic
     */
    public function getAccountJoin()
    {
      return $this->accountJoin;
    }

    /**
     * @param AccountSearchBasic $accountJoin
     * @return \Nzolt\NetSuite\AccountingTransactionSearch
     */
    public function setAccountJoin($accountJoin)
    {
      $this->accountJoin = $accountJoin;
      return $this;
    }

    /**
     * @return RevRecScheduleSearchBasic
     */
    public function getRevRecScheduleJoin()
    {
      return $this->revRecScheduleJoin;
    }

    /**
     * @param RevRecScheduleSearchBasic $revRecScheduleJoin
     * @return \Nzolt\NetSuite\AccountingTransactionSearch
     */
    public function setRevRecScheduleJoin($revRecScheduleJoin)
    {
      $this->revRecScheduleJoin = $revRecScheduleJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getTransactionJoin()
    {
      return $this->transactionJoin;
    }

    /**
     * @param TransactionSearchBasic $transactionJoin
     * @return \Nzolt\NetSuite\AccountingTransactionSearch
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
      return $this;
    }

}
