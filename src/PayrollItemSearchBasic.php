<?php

namespace Nzolt\NetSuite;

class PayrollItemSearchBasic extends SearchRecordBasic
{

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
     * @var SearchMultiSelectField $expenseAccount
     */
    protected $expenseAccount = null;

    /**
     * @var SearchEnumMultiSelectField $itemTypeNoHierarchy
     */
    protected $itemTypeNoHierarchy = null;

    /**
     * @var SearchMultiSelectField $liabilityAccount
     */
    protected $liabilityAccount = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchMultiSelectField $vendor
     */
    protected $vendor = null;

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
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchMultiSelectField $externalId
     * @return \Nzolt\NetSuite\PayrollItemSearchBasic
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
     * @return \Nzolt\NetSuite\PayrollItemSearchBasic
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
     * @return \Nzolt\NetSuite\PayrollItemSearchBasic
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
     * @return \Nzolt\NetSuite\PayrollItemSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getExpenseAccount()
    {
      return $this->expenseAccount;
    }

    /**
     * @param SearchMultiSelectField $expenseAccount
     * @return \Nzolt\NetSuite\PayrollItemSearchBasic
     */
    public function setExpenseAccount($expenseAccount)
    {
      $this->expenseAccount = $expenseAccount;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getItemTypeNoHierarchy()
    {
      return $this->itemTypeNoHierarchy;
    }

    /**
     * @param SearchEnumMultiSelectField $itemTypeNoHierarchy
     * @return \Nzolt\NetSuite\PayrollItemSearchBasic
     */
    public function setItemTypeNoHierarchy($itemTypeNoHierarchy)
    {
      $this->itemTypeNoHierarchy = $itemTypeNoHierarchy;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getLiabilityAccount()
    {
      return $this->liabilityAccount;
    }

    /**
     * @param SearchMultiSelectField $liabilityAccount
     * @return \Nzolt\NetSuite\PayrollItemSearchBasic
     */
    public function setLiabilityAccount($liabilityAccount)
    {
      $this->liabilityAccount = $liabilityAccount;
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
     * @return \Nzolt\NetSuite\PayrollItemSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Nzolt\NetSuite\PayrollItemSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getVendor()
    {
      return $this->vendor;
    }

    /**
     * @param SearchMultiSelectField $vendor
     * @return \Nzolt\NetSuite\PayrollItemSearchBasic
     */
    public function setVendor($vendor)
    {
      $this->vendor = $vendor;
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
     * @return \Nzolt\NetSuite\PayrollItemSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
