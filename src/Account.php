<?php

namespace Nzolt\NetSuite;

class Account extends Record
{

    /**
     * @var AccountType $acctType
     */
    protected $acctType = null;

    /**
     * @var RecordRef $unitsType
     */
    protected $unitsType = null;

    /**
     * @var RecordRef $unit
     */
    protected $unit = null;

    /**
     * @var string $acctNumber
     */
    protected $acctNumber = null;

    /**
     * @var string $acctName
     */
    protected $acctName = null;

    /**
     * @var string $legalName
     */
    protected $legalName = null;

    /**
     * @var boolean $includeChildren
     */
    protected $includeChildren = null;

    /**
     * @var RecordRef $currency
     */
    protected $currency = null;

    /**
     * @var string $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var ConsolidatedRate $generalRate
     */
    protected $generalRate = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

    /**
     * @var ConsolidatedRate $cashFlowRate
     */
    protected $cashFlowRate = null;

    /**
     * @var RecordRef $billableExpensesAcct
     */
    protected $billableExpensesAcct = null;

    /**
     * @var RecordRef $deferralAcct
     */
    protected $deferralAcct = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $curDocNum
     */
    protected $curDocNum = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var RecordRef $department
     */
    protected $department = null;

    /**
     * @var RecordRef $class
     */
    protected $class = null;

    /**
     * @var RecordRef $location
     */
    protected $location = null;

    /**
     * @var RecordRefList $restrictToAccountingBookList
     */
    protected $restrictToAccountingBookList = null;

    /**
     * @var boolean $inventory
     */
    protected $inventory = null;

    /**
     * @var boolean $eliminate
     */
    protected $eliminate = null;

    /**
     * @var RecordRefList $subsidiaryList
     */
    protected $subsidiaryList = null;

    /**
     * @var RecordRef $category1099misc
     */
    protected $category1099misc = null;

    /**
     * @var AccountLocalizationsList $localizationsList
     */
    protected $localizationsList = null;

    /**
     * @var float $openingBalance
     */
    protected $openingBalance = null;

    /**
     * @var \DateTime $tranDate
     */
    protected $tranDate = null;

    /**
     * @var boolean $revalue
     */
    protected $revalue = null;

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
     * @return AccountType
     */
    public function getAcctType()
    {
      return $this->acctType;
    }

    /**
     * @param AccountType $acctType
     * @return \Nzolt\NetSuite\Account
     */
    public function setAcctType($acctType)
    {
      $this->acctType = $acctType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnitsType()
    {
      return $this->unitsType;
    }

    /**
     * @param RecordRef $unitsType
     * @return \Nzolt\NetSuite\Account
     */
    public function setUnitsType($unitsType)
    {
      $this->unitsType = $unitsType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getUnit()
    {
      return $this->unit;
    }

    /**
     * @param RecordRef $unit
     * @return \Nzolt\NetSuite\Account
     */
    public function setUnit($unit)
    {
      $this->unit = $unit;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcctNumber()
    {
      return $this->acctNumber;
    }

    /**
     * @param string $acctNumber
     * @return \Nzolt\NetSuite\Account
     */
    public function setAcctNumber($acctNumber)
    {
      $this->acctNumber = $acctNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcctName()
    {
      return $this->acctName;
    }

    /**
     * @param string $acctName
     * @return \Nzolt\NetSuite\Account
     */
    public function setAcctName($acctName)
    {
      $this->acctName = $acctName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLegalName()
    {
      return $this->legalName;
    }

    /**
     * @param string $legalName
     * @return \Nzolt\NetSuite\Account
     */
    public function setLegalName($legalName)
    {
      $this->legalName = $legalName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeChildren()
    {
      return $this->includeChildren;
    }

    /**
     * @param boolean $includeChildren
     * @return \Nzolt\NetSuite\Account
     */
    public function setIncludeChildren($includeChildren)
    {
      $this->includeChildren = $includeChildren;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param RecordRef $currency
     * @return \Nzolt\NetSuite\Account
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getExchangeRate()
    {
      return $this->exchangeRate;
    }

    /**
     * @param string $exchangeRate
     * @return \Nzolt\NetSuite\Account
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = $exchangeRate;
      return $this;
    }

    /**
     * @return ConsolidatedRate
     */
    public function getGeneralRate()
    {
      return $this->generalRate;
    }

    /**
     * @param ConsolidatedRate $generalRate
     * @return \Nzolt\NetSuite\Account
     */
    public function setGeneralRate($generalRate)
    {
      $this->generalRate = $generalRate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param RecordRef $parent
     * @return \Nzolt\NetSuite\Account
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

    /**
     * @return ConsolidatedRate
     */
    public function getCashFlowRate()
    {
      return $this->cashFlowRate;
    }

    /**
     * @param ConsolidatedRate $cashFlowRate
     * @return \Nzolt\NetSuite\Account
     */
    public function setCashFlowRate($cashFlowRate)
    {
      $this->cashFlowRate = $cashFlowRate;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getBillableExpensesAcct()
    {
      return $this->billableExpensesAcct;
    }

    /**
     * @param RecordRef $billableExpensesAcct
     * @return \Nzolt\NetSuite\Account
     */
    public function setBillableExpensesAcct($billableExpensesAcct)
    {
      $this->billableExpensesAcct = $billableExpensesAcct;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDeferralAcct()
    {
      return $this->deferralAcct;
    }

    /**
     * @param RecordRef $deferralAcct
     * @return \Nzolt\NetSuite\Account
     */
    public function setDeferralAcct($deferralAcct)
    {
      $this->deferralAcct = $deferralAcct;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Nzolt\NetSuite\Account
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurDocNum()
    {
      return $this->curDocNum;
    }

    /**
     * @param int $curDocNum
     * @return \Nzolt\NetSuite\Account
     */
    public function setCurDocNum($curDocNum)
    {
      $this->curDocNum = $curDocNum;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\Account
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param RecordRef $department
     * @return \Nzolt\NetSuite\Account
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getClass()
    {
      return $this->class;
    }

    /**
     * @param RecordRef $class
     * @return \Nzolt\NetSuite\Account
     */
    public function setClass($class)
    {
      $this->class = $class;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param RecordRef $location
     * @return \Nzolt\NetSuite\Account
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getRestrictToAccountingBookList()
    {
      return $this->restrictToAccountingBookList;
    }

    /**
     * @param RecordRefList $restrictToAccountingBookList
     * @return \Nzolt\NetSuite\Account
     */
    public function setRestrictToAccountingBookList($restrictToAccountingBookList)
    {
      $this->restrictToAccountingBookList = $restrictToAccountingBookList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInventory()
    {
      return $this->inventory;
    }

    /**
     * @param boolean $inventory
     * @return \Nzolt\NetSuite\Account
     */
    public function setInventory($inventory)
    {
      $this->inventory = $inventory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEliminate()
    {
      return $this->eliminate;
    }

    /**
     * @param boolean $eliminate
     * @return \Nzolt\NetSuite\Account
     */
    public function setEliminate($eliminate)
    {
      $this->eliminate = $eliminate;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getSubsidiaryList()
    {
      return $this->subsidiaryList;
    }

    /**
     * @param RecordRefList $subsidiaryList
     * @return \Nzolt\NetSuite\Account
     */
    public function setSubsidiaryList($subsidiaryList)
    {
      $this->subsidiaryList = $subsidiaryList;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCategory1099misc()
    {
      return $this->category1099misc;
    }

    /**
     * @param RecordRef $category1099misc
     * @return \Nzolt\NetSuite\Account
     */
    public function setCategory1099misc($category1099misc)
    {
      $this->category1099misc = $category1099misc;
      return $this;
    }

    /**
     * @return AccountLocalizationsList
     */
    public function getLocalizationsList()
    {
      return $this->localizationsList;
    }

    /**
     * @param AccountLocalizationsList $localizationsList
     * @return \Nzolt\NetSuite\Account
     */
    public function setLocalizationsList($localizationsList)
    {
      $this->localizationsList = $localizationsList;
      return $this;
    }

    /**
     * @return float
     */
    public function getOpeningBalance()
    {
      return $this->openingBalance;
    }

    /**
     * @param float $openingBalance
     * @return \Nzolt\NetSuite\Account
     */
    public function setOpeningBalance($openingBalance)
    {
      $this->openingBalance = $openingBalance;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTranDate()
    {
      if ($this->tranDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->tranDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $tranDate
     * @return \Nzolt\NetSuite\Account
     */
    public function setTranDate(\DateTime $tranDate = null)
    {
      if ($tranDate == null) {
       $this->tranDate = null;
      } else {
        $this->tranDate = $tranDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRevalue()
    {
      return $this->revalue;
    }

    /**
     * @param boolean $revalue
     * @return \Nzolt\NetSuite\Account
     */
    public function setRevalue($revalue)
    {
      $this->revalue = $revalue;
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
     * @return \Nzolt\NetSuite\Account
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
     * @return \Nzolt\NetSuite\Account
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
     * @return \Nzolt\NetSuite\Account
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
