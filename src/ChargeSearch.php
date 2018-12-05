<?php

namespace Nzolt\NetSuite;

class ChargeSearch extends SearchRecord
{

    /**
     * @var ChargeSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var BillingAccountSearchBasic $billingAccountJoin
     */
    protected $billingAccountJoin = null;

    /**
     * @var BillingScheduleSearchBasic $billingScheduleJoin
     */
    protected $billingScheduleJoin = null;

    /**
     * @var EmployeeSearchBasic $chargeEmployeeJoin
     */
    protected $chargeEmployeeJoin = null;

    /**
     * @var CustomerSearchBasic $customerJoin
     */
    protected $customerJoin = null;

    /**
     * @var TransactionSearchBasic $invoiceJoin
     */
    protected $invoiceJoin = null;

    /**
     * @var ItemSearchBasic $itemJoin
     */
    protected $itemJoin = null;

    /**
     * @var JobSearchBasic $jobJoin
     */
    protected $jobJoin = null;

    /**
     * @var TransactionSearchBasic $salesOrderJoin
     */
    protected $salesOrderJoin = null;

    /**
     * @var TimeBillSearchBasic $timeJoin
     */
    protected $timeJoin = null;

    /**
     * @var TransactionSearchBasic $transactionJoin
     */
    protected $transactionJoin = null;

    /**
     * @var EmployeeSearchBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ChargeSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ChargeSearchBasic $basic
     * @return \Nzolt\NetSuite\ChargeSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return BillingAccountSearchBasic
     */
    public function getBillingAccountJoin()
    {
      return $this->billingAccountJoin;
    }

    /**
     * @param BillingAccountSearchBasic $billingAccountJoin
     * @return \Nzolt\NetSuite\ChargeSearch
     */
    public function setBillingAccountJoin($billingAccountJoin)
    {
      $this->billingAccountJoin = $billingAccountJoin;
      return $this;
    }

    /**
     * @return BillingScheduleSearchBasic
     */
    public function getBillingScheduleJoin()
    {
      return $this->billingScheduleJoin;
    }

    /**
     * @param BillingScheduleSearchBasic $billingScheduleJoin
     * @return \Nzolt\NetSuite\ChargeSearch
     */
    public function setBillingScheduleJoin($billingScheduleJoin)
    {
      $this->billingScheduleJoin = $billingScheduleJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchBasic
     */
    public function getChargeEmployeeJoin()
    {
      return $this->chargeEmployeeJoin;
    }

    /**
     * @param EmployeeSearchBasic $chargeEmployeeJoin
     * @return \Nzolt\NetSuite\ChargeSearch
     */
    public function setChargeEmployeeJoin($chargeEmployeeJoin)
    {
      $this->chargeEmployeeJoin = $chargeEmployeeJoin;
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
     * @return \Nzolt\NetSuite\ChargeSearch
     */
    public function setCustomerJoin($customerJoin)
    {
      $this->customerJoin = $customerJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getInvoiceJoin()
    {
      return $this->invoiceJoin;
    }

    /**
     * @param TransactionSearchBasic $invoiceJoin
     * @return \Nzolt\NetSuite\ChargeSearch
     */
    public function setInvoiceJoin($invoiceJoin)
    {
      $this->invoiceJoin = $invoiceJoin;
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
     * @return \Nzolt\NetSuite\ChargeSearch
     */
    public function setItemJoin($itemJoin)
    {
      $this->itemJoin = $itemJoin;
      return $this;
    }

    /**
     * @return JobSearchBasic
     */
    public function getJobJoin()
    {
      return $this->jobJoin;
    }

    /**
     * @param JobSearchBasic $jobJoin
     * @return \Nzolt\NetSuite\ChargeSearch
     */
    public function setJobJoin($jobJoin)
    {
      $this->jobJoin = $jobJoin;
      return $this;
    }

    /**
     * @return TransactionSearchBasic
     */
    public function getSalesOrderJoin()
    {
      return $this->salesOrderJoin;
    }

    /**
     * @param TransactionSearchBasic $salesOrderJoin
     * @return \Nzolt\NetSuite\ChargeSearch
     */
    public function setSalesOrderJoin($salesOrderJoin)
    {
      $this->salesOrderJoin = $salesOrderJoin;
      return $this;
    }

    /**
     * @return TimeBillSearchBasic
     */
    public function getTimeJoin()
    {
      return $this->timeJoin;
    }

    /**
     * @param TimeBillSearchBasic $timeJoin
     * @return \Nzolt\NetSuite\ChargeSearch
     */
    public function setTimeJoin($timeJoin)
    {
      $this->timeJoin = $timeJoin;
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
     * @return \Nzolt\NetSuite\ChargeSearch
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
     * @return \Nzolt\NetSuite\ChargeSearch
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return \Nzolt\NetSuite\ChargeSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
