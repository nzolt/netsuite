<?php

namespace Nzolt\NetSuite;

class AccountSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchMultiSelectField $accountingContext
     */
    protected $accountingContext = null;

    /**
     * @var SearchDoubleField $balance
     */
    protected $balance = null;

    /**
     * @var SearchEnumMultiSelectField $cashFlowRateType
     */
    protected $cashFlowRateType = null;

    /**
     * @var SearchMultiSelectField $category1099Misc
     */
    protected $category1099Misc = null;

    /**
     * @var SearchStringField $description
     */
    protected $description = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchEnumMultiSelectField $generalRateType
     */
    protected $generalRateType = null;

    /**
     * @var SearchMultiSelectField $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchLongField $internalIdNumber
     */
    protected $internalIdNumber = null;

    /**
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchStringField $legalName
     */
    protected $legalName = null;

    /**
     * @var SearchEnumMultiSelectField $locale
     */
    protected $locale = null;

    /**
     * @var SearchStringField $localizedLegalName
     */
    protected $localizedLegalName = null;

    /**
     * @var SearchStringField $localizedName
     */
    protected $localizedName = null;

    /**
     * @var SearchStringField $localizedNumber
     */
    protected $localizedNumber = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchStringField $number
     */
    protected $number = null;

    /**
     * @var SearchMultiSelectField $parent
     */
    protected $parent = null;

    /**
     * @var SearchMultiSelectField $subsidiary
     */
    protected $subsidiary = null;

    /**
     * @var SearchEnumMultiSelectField $type
     */
    protected $type = null;

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
    public function getAccountingContext()
    {
      return $this->accountingContext;
    }

    /**
     * @param SearchMultiSelectField $accountingContext
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setAccountingContext($accountingContext)
    {
      $this->accountingContext = $accountingContext;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getBalance()
    {
      return $this->balance;
    }

    /**
     * @param SearchDoubleField $balance
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setBalance($balance)
    {
      $this->balance = $balance;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getCashFlowRateType()
    {
      return $this->cashFlowRateType;
    }

    /**
     * @param SearchEnumMultiSelectField $cashFlowRateType
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setCashFlowRateType($cashFlowRateType)
    {
      $this->cashFlowRateType = $cashFlowRateType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getCategory1099Misc()
    {
      return $this->category1099Misc;
    }

    /**
     * @param SearchMultiSelectField $category1099Misc
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setCategory1099Misc($category1099Misc)
    {
      $this->category1099Misc = $category1099Misc;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchStringField $description
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Nzolt\NetSuite\AccountSearchBasic
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
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getGeneralRateType()
    {
      return $this->generalRateType;
    }

    /**
     * @param SearchEnumMultiSelectField $generalRateType
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setGeneralRateType($generalRateType)
    {
      $this->generalRateType = $generalRateType;
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
     * @return \Nzolt\NetSuite\AccountSearchBasic
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
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setInternalIdNumber($internalIdNumber)
    {
      $this->internalIdNumber = $internalIdNumber;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchBooleanField $isInactive
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLegalName()
    {
      return $this->legalName;
    }

    /**
     * @param SearchStringField $legalName
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setLegalName($legalName)
    {
      $this->legalName = $legalName;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getLocale()
    {
      return $this->locale;
    }

    /**
     * @param SearchEnumMultiSelectField $locale
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setLocale($locale)
    {
      $this->locale = $locale;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLocalizedLegalName()
    {
      return $this->localizedLegalName;
    }

    /**
     * @param SearchStringField $localizedLegalName
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setLocalizedLegalName($localizedLegalName)
    {
      $this->localizedLegalName = $localizedLegalName;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLocalizedName()
    {
      return $this->localizedName;
    }

    /**
     * @param SearchStringField $localizedName
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setLocalizedName($localizedName)
    {
      $this->localizedName = $localizedName;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getLocalizedNumber()
    {
      return $this->localizedNumber;
    }

    /**
     * @param SearchStringField $localizedNumber
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setLocalizedNumber($localizedNumber)
    {
      $this->localizedNumber = $localizedNumber;
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
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param SearchStringField $number
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param SearchMultiSelectField $parent
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
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
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setSubsidiary($subsidiary)
    {
      $this->subsidiary = $subsidiary;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param SearchEnumMultiSelectField $type
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \Nzolt\NetSuite\AccountSearchBasic
     */
    public function setCustomFieldList($customFieldList)
    {
      $this->customFieldList = $customFieldList;
      return $this;
    }

}
