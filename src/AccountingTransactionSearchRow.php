<?php

namespace Nzolt\NetSuite;

class AccountingTransactionSearchRow extends SearchRow
{

    /**
     * @var AccountingTransactionSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var AccountSearchRowBasic $accountJoin
     */
    protected $accountJoin = null;

    /**
     * @var RevRecScheduleSearchRowBasic $revRecScheduleJoin
     */
    protected $revRecScheduleJoin = null;

    /**
     * @var TransactionSearchRowBasic $transactionJoin
     */
    protected $transactionJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountingTransactionSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param AccountingTransactionSearchRowBasic $basic
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return AccountSearchRowBasic
     */
    public function getAccountJoin()
    {
      return $this->accountJoin;
    }

    /**
     * @param AccountSearchRowBasic $accountJoin
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRow
     */
    public function setAccountJoin($accountJoin)
    {
      $this->accountJoin = $accountJoin;
      return $this;
    }

    /**
     * @return RevRecScheduleSearchRowBasic
     */
    public function getRevRecScheduleJoin()
    {
      return $this->revRecScheduleJoin;
    }

    /**
     * @param RevRecScheduleSearchRowBasic $revRecScheduleJoin
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRow
     */
    public function setRevRecScheduleJoin($revRecScheduleJoin)
    {
      $this->revRecScheduleJoin = $revRecScheduleJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getTransactionJoin()
    {
      return $this->transactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $transactionJoin
     * @return \Nzolt\NetSuite\AccountingTransactionSearchRow
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
      return $this;
    }

}
