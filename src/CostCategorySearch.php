<?php

namespace Nzolt\NetSuite;

class CostCategorySearch extends SearchRecord
{

    /**
     * @var CostCategorySearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var AccountSearchBasic $accountJoin
     */
    protected $accountJoin = null;

    /**
     * @var TransactionSearchBasic $transactionJoin
     */
    protected $transactionJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CostCategorySearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param CostCategorySearchBasic $basic
     * @return \Nzolt\NetSuite\CostCategorySearch
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
     * @return \Nzolt\NetSuite\CostCategorySearch
     */
    public function setAccountJoin($accountJoin)
    {
      $this->accountJoin = $accountJoin;
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
     * @return \Nzolt\NetSuite\CostCategorySearch
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
      return $this;
    }

}
