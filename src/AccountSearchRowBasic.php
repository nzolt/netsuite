<?php

namespace Nzolt\NetSuite;

class AccountSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $accountingContext
     */
    protected $accountingContext = null;

    /**
     * @var SearchColumnDoubleField[] $balance
     */
    protected $balance = null;

    /**
     * @var SearchColumnEnumSelectField[] $cashFlowRateType
     */
    protected $cashFlowRateType = null;

    /**
     * @var SearchColumnSelectField[] $category1099Misc
     */
    protected $category1099Misc = null;

    /**
     * @var SearchColumnStringField[] $description
     */
    protected $description = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnEnumSelectField[] $generalRateType
     */
    protected $generalRateType = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnStringField[] $legalName
     */
    protected $legalName = null;

    /**
     * @var SearchColumnStringField[] $locale
     */
    protected $locale = null;

    /**
     * @var SearchColumnStringField[] $localizedLegalName
     */
    protected $localizedLegalName = null;

    /**
     * @var SearchColumnStringField[] $localizedName
     */
    protected $localizedName = null;

    /**
     * @var SearchColumnStringField[] $localizedNumber
     */
    protected $localizedNumber = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnStringField[] $number
     */
    protected $number = null;

    /**
     * @var SearchColumnSelectField[] $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchColumnEnumSelectField[] $type
     */
    protected $type = null;

    /**
     * @var SearchColumnCustomFieldList $customFieldList
     */
    protected $customFieldList = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAccountingContext()
    {
      return $this->accountingContext;
    }

    /**
     * @param SearchColumnStringField[] $accountingContext
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setAccountingContext(array $accountingContext = null)
    {
      $this->accountingContext = $accountingContext;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getBalance()
    {
      return $this->balance;
    }

    /**
     * @param SearchColumnDoubleField[] $balance
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setBalance(array $balance = null)
    {
      $this->balance = $balance;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getCashFlowRateType()
    {
      return $this->cashFlowRateType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $cashFlowRateType
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setCashFlowRateType(array $cashFlowRateType = null)
    {
      $this->cashFlowRateType = $cashFlowRateType;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getCategory1099Misc()
    {
      return $this->category1099Misc;
    }

    /**
     * @param SearchColumnSelectField[] $category1099Misc
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setCategory1099Misc(array $category1099Misc = null)
    {
      $this->category1099Misc = $category1099Misc;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setDescription(array $description = null)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getGeneralRateType()
    {
      return $this->generalRateType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $generalRateType
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setGeneralRateType(array $generalRateType = null)
    {
      $this->generalRateType = $generalRateType;
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
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
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
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLegalName()
    {
      return $this->legalName;
    }

    /**
     * @param SearchColumnStringField[] $legalName
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setLegalName(array $legalName = null)
    {
      $this->legalName = $legalName;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocale()
    {
      return $this->locale;
    }

    /**
     * @param SearchColumnStringField[] $locale
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setLocale(array $locale = null)
    {
      $this->locale = $locale;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocalizedLegalName()
    {
      return $this->localizedLegalName;
    }

    /**
     * @param SearchColumnStringField[] $localizedLegalName
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setLocalizedLegalName(array $localizedLegalName = null)
    {
      $this->localizedLegalName = $localizedLegalName;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocalizedName()
    {
      return $this->localizedName;
    }

    /**
     * @param SearchColumnStringField[] $localizedName
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setLocalizedName(array $localizedName = null)
    {
      $this->localizedName = $localizedName;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getLocalizedNumber()
    {
      return $this->localizedNumber;
    }

    /**
     * @param SearchColumnStringField[] $localizedNumber
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setLocalizedNumber(array $localizedNumber = null)
    {
      $this->localizedNumber = $localizedNumber;
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
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param SearchColumnStringField[] $number
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setNumber(array $number = null)
    {
      $this->number = $number;
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
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setSubsidiary(array $subsidiary = null)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param SearchColumnEnumSelectField[] $type
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setType(array $type = null)
    {
      $this->type = $type;
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
     * @return \Nzolt\NetSuite\AccountSearchRowBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
