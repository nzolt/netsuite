<?php

namespace Nzolt\NetSuite;

class RevRecScheduleSearchRow extends SearchRow
{

    /**
     * @var RevRecScheduleSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var TransactionSearchRowBasic $appliedToTransactionJoin
     */
    protected $appliedToTransactionJoin = null;

    /**
     * @var CustomerSearchRowBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var ItemSearchRowBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var TransactionSearchRowBasic $transactionJoin
     */
    protected $transactionJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RevRecScheduleSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param RevRecScheduleSearchRowBasic $basic
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getAppliedToTransactionJoin()
    {
      return $this->appliedToTransactionJoin;
    }

    /**
     * @param TransactionSearchRowBasic $appliedToTransactionJoin
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRow
     */
    public function setAppliedToTransactionJoin($appliedToTransactionJoin)
    {
      $this->appliedToTransactionJoin = $appliedToTransactionJoin;
      return $this;
    }

    /**
     * @return CustomerSearchRowBasic
     */
    public function getCustomerJoin()
    {
      return $this->customerJoin;
    }

    /**
     * @param CustomerSearchRowBasic $customerJoin
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRow
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return ItemSearchRowBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchRowBasic $itemJoin
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRow
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
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
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRow
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return \Nzolt\NetSuite\RevRecScheduleSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
