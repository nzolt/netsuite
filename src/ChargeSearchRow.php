<?php

namespace Nzolt\NetSuite;

class ChargeSearchRow extends SearchRow
{

    /**
     * @var ChargeSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var BillingAccountSearchRowBasic $billingAccountJoin
     */
    protected $billingAccountJoin = null;

    /**
     * @var BillingScheduleSearchRowBasic $billingScheduleJoin
     */
    protected $billingScheduleJoin = null;

    /**
     * @var EmployeeSearchRowBasic $chargeEmployeeJoin
     */
    protected $chargeEmployeeJoin = null;

    /**
     * @var CustomerSearchRowBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var TransactionSearchRowBasic $invoiceJoin
     */
    protected $invoiceJoin = null;

    /**
     * @var ItemSearchRowBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var JobSearchRowBasic $jobJoin
     */
    protected $jobJoin = null;

    /**
     * @var TransactionSearchRowBasic $salesOrderJoin
     */
    protected $salesOrderJoin = null;

    /**
     * @var TimeBillSearchRowBasic $timeJoin
     */
    protected $timeJoin = null;

    /**
     * @var TransactionSearchRowBasic $transactionJoin
     */
    protected $transactionJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChargeSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ChargeSearchRowBasic $basic
     * @return \Nzolt\NetSuite\ChargeSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return BillingAccountSearchRowBasic
     */
    public function getBillingAccountJoin()
    {
      return $this->billingAccountJoin;
    }

    /**
     * @param BillingAccountSearchRowBasic $billingAccountJoin
     * @return \Nzolt\NetSuite\ChargeSearchRow
     */
    public function setBillingAccountJoin($billingAccountJoin)
    {
      $this->billingAccountJoin = $billingAccountJoin;
      return $this;
    }

    /**
     * @return BillingScheduleSearchRowBasic
     */
    public function getBillingScheduleJoin()
    {
      return $this->billingScheduleJoin;
    }

    /**
     * @param BillingScheduleSearchRowBasic $billingScheduleJoin
     * @return \Nzolt\NetSuite\ChargeSearchRow
     */
    public function setBillingScheduleJoin($billingScheduleJoin)
    {
      $this->billingScheduleJoin = $billingScheduleJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getChargeEmployeeJoin()
    {
      return $this->chargeEmployeeJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $chargeEmployeeJoin
     * @return \Nzolt\NetSuite\ChargeSearchRow
     */
    public function setChargeEmployeeJoin($chargeEmployeeJoin)
    {
      $this->chargeEmployeeJoin = $chargeEmployeeJoin;
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
     * @return \Nzolt\NetSuite\ChargeSearchRow
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getInvoiceJoin()
    {
      return $this->invoiceJoin;
    }

    /**
     * @param TransactionSearchRowBasic $invoiceJoin
     * @return \Nzolt\NetSuite\ChargeSearchRow
     */
    public function setInvoiceJoin($invoiceJoin)
    {
      $this->invoiceJoin = $invoiceJoin;
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
     * @return \Nzolt\NetSuite\ChargeSearchRow
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return JobSearchRowBasic
     */
    public function getJobJoin()
    {
      return $this->jobJoin;
    }

    /**
     * @param JobSearchRowBasic $jobJoin
     * @return \Nzolt\NetSuite\ChargeSearchRow
     */
    public function setJobJoin($jobJoin)
    {
      $this->jobJoin = $jobJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getSalesOrderJoin()
    {
      return $this->salesOrderJoin;
    }

    /**
     * @param TransactionSearchRowBasic $salesOrderJoin
     * @return \Nzolt\NetSuite\ChargeSearchRow
     */
    public function setSalesOrderJoin($salesOrderJoin)
    {
      $this->salesOrderJoin = $salesOrderJoin;
      return $this;
    }

    /**
     * @return TimeBillSearchRowBasic
     */
    public function getTimeJoin()
    {
      return $this->timeJoin;
    }

    /**
     * @param TimeBillSearchRowBasic $timeJoin
     * @return \Nzolt\NetSuite\ChargeSearchRow
     */
    public function setTimeJoin($timeJoin)
    {
      $this->timeJoin = $timeJoin;
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
     * @return \Nzolt\NetSuite\ChargeSearchRow
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
     * @return \Nzolt\NetSuite\ChargeSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return \Nzolt\NetSuite\ChargeSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
