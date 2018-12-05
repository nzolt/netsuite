<?php

namespace Nzolt\NetSuite;

class ItemAccountMappingSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $accountingBook
     */
    protected $accountingBook = null;

    /**
     * @var SearchMultiSelectField $class
     */
    protected $class = null;

    /**
     * @var SearchMultiSelectCustomField $customDimension
     */
    protected $customDimension = null;

    /**
     * @var SearchMultiSelectField $department
     */
    protected $department = null;

    /**
     * @var SearchMultiSelectField $destinationAccount
     */
    protected $destinationAccount = null;

    /**
     * @var SearchDateField $effectiveDate
     */
    protected $effectiveDate = null;

    /**
     * @var SearchDateField $endDate
     */
    protected $endDate = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchEnumMultiSelectField $itemAccount
     */
    protected $itemAccount = null;

    /**
     * @var SearchMultiSelectField $location
     */
    protected $location = null;

    /**
     * @var SearchMultiSelectField $sourceAccount
     */
    protected $sourceAccount = null;

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
    public function getAccountingBook()
    {
      return $this->accountingBook;
    }

    /**
     * @param SearchMultiSelectField $accountingBook
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
     */
    public function setAccountingBook($accountingBook)
    {
      $this->accountingBook = $accountingBook;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return SearchMultiSelectCustomField
     */
    public function getCustomDimension()
    {
      return $this->customDimension;
    }

    /**
     * @param SearchMultiSelectCustomField $customDimension
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
     */
    public function setCustomDimension($customDimension)
    {
      $this->customDimension = $customDimension;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDestinationAccount()
    {
      return $this->destinationAccount;
    }

    /**
     * @param SearchMultiSelectField $destinationAccount
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
     */
    public function setDestinationAccount($destinationAccount)
    {
      $this->destinationAccount = $destinationAccount;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEffectiveDate()
    {
      return $this->effectiveDate;
    }

    /**
     * @param SearchDateField $effectiveDate
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
     */
    public function setEffectiveDate($effectiveDate)
    {
      $this->effectiveDate = $effectiveDate;
      return $this;
    }

    /**
     * @return SearchDateField
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param SearchDateField $endDate
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getItemAccount()
    {
      return $this->itemAccount;
    }

    /**
     * @param SearchEnumMultiSelectField $itemAccount
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
     */
    public function setItemAccount($itemAccount)
    {
      $this->itemAccount = $itemAccount;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getSourceAccount()
    {
      return $this->sourceAccount;
    }

    /**
     * @param SearchMultiSelectField $sourceAccount
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
     */
    public function setSourceAccount($sourceAccount)
    {
      $this->sourceAccount = $sourceAccount;
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
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
     * @return \Nzolt\NetSuite\ItemAccountMappingSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
