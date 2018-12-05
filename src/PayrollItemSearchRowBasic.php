<?php

namespace Nzolt\NetSuite;

class PayrollItemSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnStringField[] $expenseAccount
     */
    protected $expenseAccount = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnStringField[] $itemTypeNoHierarchy
     */
    protected $itemTypeNoHierarchy = null;

    /**
     * @var SearchColumnStringField[] $liabilityAccount
     */
    protected $liabilityAccount = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnStringField[] $vendor
     */
    protected $vendor = null;

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
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\PayrollItemSearchRowBasic
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
     * @return \Nzolt\NetSuite\PayrollItemSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getExpenseAccount()
    {
      return $this->expenseAccount;
    }

    /**
     * @param SearchColumnStringField[] $expenseAccount
     * @return \Nzolt\NetSuite\PayrollItemSearchRowBasic
     */
    public function setExpenseAccount(array $expenseAccount = null)
    {
      $this->expenseAccount = $expenseAccount;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchColumnBooleanField[] $isInactive
     * @return \Nzolt\NetSuite\PayrollItemSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getItemTypeNoHierarchy()
    {
      return $this->itemTypeNoHierarchy;
    }

    /**
     * @param SearchColumnStringField[] $itemTypeNoHierarchy
     * @return \Nzolt\NetSuite\PayrollItemSearchRowBasic
     */
    public function setItemTypeNoHierarchy(array $itemTypeNoHierarchy = null)
    {
      $this->itemTypeNoHierarchy = $itemTypeNoHierarchy;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLiabilityAccount()
    {
      return $this->liabilityAccount;
    }

    /**
     * @param SearchColumnStringField[] $liabilityAccount
     * @return \Nzolt\NetSuite\PayrollItemSearchRowBasic
     */
    public function setLiabilityAccount(array $liabilityAccount = null)
    {
      $this->liabilityAccount = $liabilityAccount;
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
     * @return \Nzolt\NetSuite\PayrollItemSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getVendor()
    {
      return $this->vendor;
    }

    /**
     * @param SearchColumnStringField[] $vendor
     * @return \Nzolt\NetSuite\PayrollItemSearchRowBasic
     */
    public function setVendor(array $vendor = null)
    {
      $this->vendor = $vendor;
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
     * @return \Nzolt\NetSuite\PayrollItemSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
