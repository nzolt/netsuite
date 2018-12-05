<?php

namespace Nzolt\NetSuite;

class RevRecScheduleSearch extends SearchRecord
{

    /**
     * @var RevRecScheduleSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var TransactionSearchBasic $appliedToTransactionJoin
     */
    protected $appliedToTransactionJoin = null;

    /**
     * @var CustomerSearchBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var ItemSearchBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var TransactionSearchBasic $transactionJoin
     */
    protected $transactionJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RevRecScheduleSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param RevRecScheduleSearchBasic $basic
     * @return \Nzolt\NetSuite\RevRecScheduleSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getAppliedToTransactionJoin()
    {
      return $this->appliedToTransactionJoin;
    }

    /**
     * @param TransactionSearchBasic $appliedToTransactionJoin
     * @return \Nzolt\NetSuite\RevRecScheduleSearch
     */
    public function setAppliedToTransactionJoin($appliedToTransactionJoin)
    {
      $this->appliedToTransactionJoin = $appliedToTransactionJoin;
      return $this;
    }

    /**
     * @return CustomerSearchBasic
     */
    public function getCustomerJoin()
    {
      return $this->customerJoin;
    }

    /**
     * @param CustomerSearchBasic $customerJoin
     * @return \Nzolt\NetSuite\RevRecScheduleSearch
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return ItemSearchBasic
     */
    public function getItemJoin()
    {
      return $this->itemJoin;
    }

    /**
     * @param ItemSearchBasic $itemJoin
     * @return \Nzolt\NetSuite\RevRecScheduleSearch
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
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
     * @return \Nzolt\NetSuite\RevRecScheduleSearch
     */
    public function setTransactionJoin($transactionJoin)
    {
      $this->transactionJoin = $transactionJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchBasic $userJoin
     * @return \Nzolt\NetSuite\RevRecScheduleSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

}
