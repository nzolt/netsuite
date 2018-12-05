<?php

namespace Nzolt\NetSuite;

class BillingAccountSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var SearchColumnSelectField[] $cashSaleForm
     */
    protected $cashSaleForm = null;

    /**
     * @var SearchColumnSelectField[] $class
     */
    protected $class = null;

    /**
     * @var SearchColumnSelectField[] $currency
     */
    protected $currency = null;

    /**
     * @var SearchColumnSelectField[] $customer
     */
    protected $customer = null;

    /**
     * @var SearchColumnBooleanField[] $customerDefault
     */
    protected $customerDefault = null;

    /**
     * @var SearchColumnDateField[] $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchColumnSelectField[] $department
     */
    protected $department = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnEnumSelectField[] $frequency
     */
    protected $frequency = null;

    /**
     * @var SearchColumnStringField[] $idNumber
     */
    protected $idNumber = null;

    /**
     * @var SearchColumnBooleanField[] $inactive
     */
    protected $inactive = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnSelectField[] $invoiceForm
     */
    protected $invoiceForm = null;

    /**
     * @var SearchColumnDateField[] $lastBillCycleDate
     */
    protected $lastBillCycleDate = null;

    /**
     * @var SearchColumnDateField[] $lastBillDate
     */
    protected $lastBillDate = null;

    /**
     * @var SearchColumnSelectField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnStringField[] $memo
     */
    protected $memo = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnDateField[] $nextBillCycleDate
     */
    protected $nextBillCycleDate = null;

    /**
     * @var SearchColumnDateField[] $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchColumnSelectField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getBillingSchedule()
    {
      return $this->billingSchedule;
    }

    /**
     * @param SearchColumnSelectField[] $billingSchedule
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setBillingSchedule(array $billingSchedule = null)
    {
      $this->billingSchedule = $billingSchedule;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCashSaleForm()
    {
      return $this->cashSaleForm;
    }

    /**
     * @param SearchColumnSelectField[] $cashSaleForm
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setCashSaleForm(array $cashSaleForm = null)
    {
      $this->cashSaleForm = $cashSaleForm;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param SearchColumnSelectField[] $class
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setClass(array $class = null)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param SearchColumnSelectField[] $currency
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setCurrency(array $currency = null)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param SearchColumnSelectField[] $customer
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setCustomer(array $customer = null)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getCustomerDefault()
    {
      return $this->customerDefault;
    }

    /**
     * @param SearchColumnBooleanField[] $customerDefault
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setCustomerDefault(array $customerDefault = null)
    {
      $this->customerDefault = $customerDefault;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateCreated()
    {
      return $this->dateCreated;
    }

    /**
     * @param SearchColumnDateField[] $dateCreated
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setDateCreated(array $dateCreated = null)
    {
      $this->dateCreated = $dateCreated;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param SearchColumnSelectField[] $department
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setDepartment(array $department = null)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getFrequency()
    {
      return $this->frequency;
    }

    /**
     * @param SearchColumnEnumSelectField[] $frequency
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setFrequency(array $frequency = null)
    {
      $this->frequency = $frequency;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getIdNumber()
    {
      return $this->idNumber;
    }

    /**
     * @param SearchColumnStringField[] $idNumber
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setIdNumber(array $idNumber = null)
    {
      $this->idNumber = $idNumber;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getInactive()
    {
      return $this->inactive;
    }

    /**
     * @param SearchColumnBooleanField[] $inactive
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setInactive(array $inactive = null)
    {
      $this->inactive = $inactive;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInvoiceForm()
    {
      return $this->invoiceForm;
    }

    /**
     * @param SearchColumnSelectField[] $invoiceForm
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setInvoiceForm(array $invoiceForm = null)
    {
      $this->invoiceForm = $invoiceForm;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastBillCycleDate()
    {
      return $this->lastBillCycleDate;
    }

    /**
     * @param SearchColumnDateField[] $lastBillCycleDate
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setLastBillCycleDate(array $lastBillCycleDate = null)
    {
      $this->lastBillCycleDate = $lastBillCycleDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getLastBillDate()
    {
      return $this->lastBillDate;
    }

    /**
     * @param SearchColumnDateField[] $lastBillDate
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setLastBillDate(array $lastBillDate = null)
    {
      $this->lastBillDate = $lastBillDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchColumnSelectField[] $location
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param SearchColumnStringField[] $memo
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setMemo(array $memo = null)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getNextBillCycleDate()
    {
      return $this->nextBillCycleDate;
    }

    /**
     * @param SearchColumnDateField[] $nextBillCycleDate
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setNextBillCycleDate(array $nextBillCycleDate = null)
    {
      $this->nextBillCycleDate = $nextBillCycleDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchColumnDateField[] $startDate
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setStartDate(array $startDate = null)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchColumnSelectField[] $subsidiary
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchColumnCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\BillingAccountSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
