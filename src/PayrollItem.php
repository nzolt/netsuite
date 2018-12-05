<?php

namespace Nzolt\NetSuite;

class PayrollItem extends Record
{

    /**
     * @var RecordRef $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var RecordRef $itemType
     */
    protected $itemType = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var RecordRef $vendor
     */
    protected $vendor = null;

    /**
     * @var RecordRef $expenseAccount
     */
    protected $expenseAccount = null;

    /**
     * @var RecordRef $liabilityAccount
     */
    protected $liabilityAccount = null;

    /**
     * @var boolean $employeePaid
     */
    protected $employeePaid = null;

    /**
     * @var boolean $inactive
     */
    protected $inactive = null;

    /**
     * @var CustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return RecordRef
     */
    public function getSubsidiary()
    {
      return $this->subsidiary;
    }

    /**
     * @param RecordRef $subsidiary
     * @return \Nzolt\NetSuite\PayrollItem
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getItemType()
    {
      return $this->itemType;
    }

    /**
     * @param RecordRef $itemType
     * @return \Nzolt\NetSuite\PayrollItem
     */
    public function setItemType($itemType)
    {
      $this->itemType = $itemType;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\PayrollItem
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getVendor()
    {
      return $this->vendor;
    }

    /**
     * @param RecordRef $vendor
     * @return \Nzolt\NetSuite\PayrollItem
     */
    public function setVendor($vendor)
    {
      $this->vendor = $vendor;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getExpenseAccount()
    {
      return $this->expenseAccount;
    }

    /**
     * @param RecordRef $expenseAccount
     * @return \Nzolt\NetSuite\PayrollItem
     */
    public function setExpenseAccount($expenseAccount)
    {
      $this->expenseAccount = $expenseAccount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLiabilityAccount()
    {
      return $this->liabilityAccount;
    }

    /**
     * @param RecordRef $liabilityAccount
     * @return \Nzolt\NetSuite\PayrollItem
     */
    public function setLiabilityAccount($liabilityAccount)
    {
      $this->liabilityAccount = $liabilityAccount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmployeePaid()
    {
      return $this->employeePaid;
    }

    /**
     * @param boolean $employeePaid
     * @return \Nzolt\NetSuite\PayrollItem
     */
    public function setEmployeePaid($employeePaid)
    {
      $this->employeePaid = $employeePaid;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInactive()
    {
      return $this->inactive;
    }

    /**
     * @param boolean $inactive
     * @return \Nzolt\NetSuite\PayrollItem
     */
    public function setInactive($inactive)
    {
      $this->inactive = $inactive;
      return $this;
    }

    /**
     * @return CustomFieldList
     */
    public function getCustomFieldList()
    {
      return $this->customFieldList;
    }

    /**
     * @param CustomFieldList $customFieldList
     * @return \Nzolt\NetSuite\PayrollItem
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\PayrollItem
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\PayrollItem
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
