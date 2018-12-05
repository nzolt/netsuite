<?php

namespace Nzolt\NetSuite;

class ItemAccountMappingSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var SearchColumnSelectField[] $class
     */
    protected $class = null;

    /**
     * @var SearchColumnSelectCustomField[] $customDimension
     */
    protected $customDimension = null;

    /**
     * @var SearchColumnSelectField[] $department
     */
    protected $department = null;

    /**
     * @var SearchColumnSelectField[] $destinationAccount
     */
    protected $destinationAccount = null;

    /**
     * @var SearchColumnDateField[] $effectiveDate
     */
    protected $effectiveDate = null;

    /**
     * @var SearchColumnDateField[] $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnEnumSelectField[] $itemAccount
     */
    protected $itemAccount = null;

    /**
     * @var SearchColumnSelectField[] $location
     */
    protected $location = null;

    /**
     * @var SearchColumnSelectField[] $sourceAccount
     */
    protected $sourceAccount = null;

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
    public function getAccountingBook()
    {
      return $this->accountingBook;
    }

    /**
     * @param SearchColumnSelectField[] $accountingBook
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRowBasic
     */
    public function setAccountingBook(array $accountingBook = null)
    {
      $this->accountingBook = $accountingBook;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRowBasic
     */
    public function setClass(array $class = null)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchColumnSelectCustomField[]
     */
    public function getCustomDimension()
    {
      return $this->customDimension;
    }

    /**
     * @param SearchColumnSelectCustomField[] $customDimension
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRowBasic
     */
    public function setCustomDimension(array $customDimension = null)
    {
      $this->customDimension = $customDimension;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRowBasic
     */
    public function setDepartment(array $department = null)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getDestinationAccount()
    {
      return $this->destinationAccount;
    }

    /**
     * @param SearchColumnSelectField[] $destinationAccount
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRowBasic
     */
    public function setDestinationAccount(array $destinationAccount = null)
    {
      $this->destinationAccount = $destinationAccount;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEffectiveDate()
    {
      return $this->effectiveDate;
    }

    /**
     * @param SearchColumnDateField[] $effectiveDate
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRowBasic
     */
    public function setEffectiveDate(array $effectiveDate = null)
    {
      $this->effectiveDate = $effectiveDate;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param SearchColumnDateField[] $endDate
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRowBasic
     */
    public function setEndDate(array $endDate = null)
    {
      $this->endDate = $endDate;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getItemAccount()
    {
      return $this->itemAccount;
    }

    /**
     * @param SearchColumnEnumSelectField[] $itemAccount
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRowBasic
     */
    public function setItemAccount(array $itemAccount = null)
    {
      $this->itemAccount = $itemAccount;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRowBasic
     */
    public function setLocation(array $location = null)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getSourceAccount()
    {
      return $this->sourceAccount;
    }

    /**
     * @param SearchColumnSelectField[] $sourceAccount
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRowBasic
     */
    public function setSourceAccount(array $sourceAccount = null)
    {
      $this->sourceAccount = $sourceAccount;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRowBasic
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
