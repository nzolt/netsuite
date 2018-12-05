<?php

namespace Nzolt\NetSuite;

class BillingAccountSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var SearchMultiSelectField $cashSaleForm
     */
    protected $cashSaleForm = null;

    /**
     * @var SearchMultiSelectField $class
     */
    protected $class = null;

    /**
     * @var SearchMultiSelectField $currency
     */
    protected $currency = null;

    /**
     * @var SearchMultiSelectField $customer
     */
    protected $customer = null;

    /**
     * @var SearchBooleanField $customerDefault
     */
    protected $customerDefault = null;

    /**
     * @var SearchDateField $dateCreated
     */
    protected $dateCreated = null;

    /**
     * @var SearchMultiSelectField $department
     */
    protected $department = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchEnumMultiSelectField $frequency
     */
    protected $frequency = null;

    /**
     * @var SearchStringField $idNumber
     */
    protected $idNumber = null;

    /**
     * @var SearchBooleanField $inactive
     */
    protected $inactive = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchMultiSelectField $invoiceForm
     */
    protected $invoiceForm = null;

    /**
     * @var SearchDateField $lastBillCycleDate
     */
    protected $lastBillCycleDate = null;

    /**
     * @var SearchDateField $lastBillDate
     */
    protected $lastBillDate = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchStringField $memo
     */
    protected $memo = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchDateField $nextBillCycleDate
     */
    protected $nextBillCycleDate = null;

    /**
     * @var SearchDateField $startDate
     */
    protected $startDate = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getBillingSchedule()
    {
      return $this->billingSchedule;
    }

    /**
     * @param SearchMultiSelectField $billingSchedule
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setBillingSchedule($billingSchedule)
    {
      $this->billingSchedule = $billingSchedule;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCashSaleForm()
    {
      return $this->cashSaleForm;
    }

    /**
     * @param SearchMultiSelectField $cashSaleForm
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setCashSaleForm($cashSaleForm)
    {
      $this->cashSaleForm = $cashSaleForm;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param SearchMultiSelectField $class
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param SearchMultiSelectField $currency
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCustomer()
    {
      return $this->customer;
    }

    /**
     * @param SearchMultiSelectField $customer
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setCustomer($customer)
    {
      $this->customer = $customer;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getCustomerDefault()
    {
      return $this->customerDefault;
    }

    /**
     * @param SearchBooleanField $customerDefault
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setCustomerDefault($customerDefault)
    {
      $this->customerDefault = $customerDefault;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getDateCreated()
    {
      return $this->dateCreated;
    }

    /**
     * @param SearchDateField $dateCreated
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setDateCreated($dateCreated)
    {
      $this->dateCreated = $dateCreated;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param SearchMultiSelectField $department
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getExternalIdString()
    {
      return $this->externalIdString;
    }

    /**
     * @param SearchStringField $externalIdString
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getFrequency()
    {
      return $this->frequency;
    }

    /**
     * @param SearchEnumMultiSelectField $frequency
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setFrequency($frequency)
    {
      $this->frequency = $frequency;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getIdNumber()
    {
      return $this->idNumber;
    }

    /**
     * @param SearchStringField $idNumber
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setIdNumber($idNumber)
    {
      $this->idNumber = $idNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getInactive()
    {
      return $this->inactive;
    }

    /**
     * @param SearchBooleanField $inactive
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setInactive($inactive)
    {
      $this->inactive = $inactive;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchMultiSelectField $internalId
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getInternalIdNumber()
    {
      return $this->internalIdNumber;
    }

    /**
     * @param SearchLongField $internalIdNumber
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInvoiceForm()
    {
      return $this->invoiceForm;
    }

    /**
     * @param SearchMultiSelectField $invoiceForm
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setInvoiceForm($invoiceForm)
    {
      $this->invoiceForm = $invoiceForm;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastBillCycleDate()
    {
      return $this->lastBillCycleDate;
    }

    /**
     * @param SearchDateField $lastBillCycleDate
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setLastBillCycleDate($lastBillCycleDate)
    {
      $this->lastBillCycleDate = $lastBillCycleDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getLastBillDate()
    {
      return $this->lastBillDate;
    }

    /**
     * @param SearchDateField $lastBillDate
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setLastBillDate($lastBillDate)
    {
      $this->lastBillDate = $lastBillDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param SearchMultiSelectField $location
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param SearchStringField $memo
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchStringField $name
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getNextBillCycleDate()
    {
      return $this->nextBillCycleDate;
    }

    /**
     * @param SearchDateField $nextBillCycleDate
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setNextBillCycleDate($nextBillCycleDate)
    {
      $this->nextBillCycleDate = $nextBillCycleDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param SearchDateField $startDate
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param SearchMultiSelectField $subsidiary
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchCustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param SearchCustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\BillingAccountSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
