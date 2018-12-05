<?php

namespace Nzolt\NetSuite;

class CostCategorySearchRow extends SearchRow
{

    /**
     * @var CostCategorySearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var AccountSearchRowBasic $accountJoin
     */
    protected $accountJoin = null;

    /**
     * @var TransactionSearchRowBasic $transactionJoin
     */
    protected $transactionJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CostCategorySearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CostCategorySearchRowBasic $basic
     * @return \Nzolt\NetSuite\CostCategorySearchRow
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
     * @return \Nzolt\NetSuite\CostCategorySearchRow
     */
    public function setAccountJoin($accountJoin)
    {
      $this->accountJoin = $accountJoin;
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
     * @return \Nzolt\NetSuite\CostCategorySearchRow
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
      return $this;
    }

}
