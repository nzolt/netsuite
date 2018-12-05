<?php

namespace Nzolt\NetSuite;

class RevRecTemplateSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchEnumMultiSelectField $amorMethod
     */
    protected $amorMethod = null;

    /**
     * @var SearchLongField $amorPeriod
     */
    protected $amorPeriod = null;

    /**
     * @var SearchLongField $amorStartOffset
     */
    protected $amorStartOffset = null;

    /**
     * @var SearchEnumMultiSelectField $amorTermSrc
     */
    protected $amorTermSrc = null;

    /**
     * @var SearchEnumMultiSelectField $amorType
     */
    protected $amorType = null;

    /**
     * @var SearchMultiSelectField $contraAccount
     */
    protected $contraAccount = null;

    /**
     * @var SearchMultiSelectField $deferralAccount
     */
    protected $deferralAccount = null;

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
     * @var SearchBooleanField $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchLongField $periodOffset
     */
    protected $periodOffset = null;

    /**
     * @var SearchMultiSelectField $targetAccount
     */
    protected $targetAccount = null;

    /**
     * @var SearchBooleanField $useForeignAmounts
     */
    protected $useForeignAmounts = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAmorMethod()
    {
      return $this->amorMethod;
    }

    /**
     * @param SearchEnumMultiSelectField $amorMethod
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
     */
    public function setAmorMethod($amorMethod)
    {
      $this->amorMethod = $amorMethod;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getAmorPeriod()
    {
      return $this->amorPeriod;
    }

    /**
     * @param SearchLongField $amorPeriod
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
     */
    public function setAmorPeriod($amorPeriod)
    {
      $this->amorPeriod = $amorPeriod;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getAmorStartOffset()
    {
      return $this->amorStartOffset;
    }

    /**
     * @param SearchLongField $amorStartOffset
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
     */
    public function setAmorStartOffset($amorStartOffset)
    {
      $this->amorStartOffset = $amorStartOffset;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAmorTermSrc()
    {
      return $this->amorTermSrc;
    }

    /**
     * @param SearchEnumMultiSelectField $amorTermSrc
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
     */
    public function setAmorTermSrc($amorTermSrc)
    {
      $this->amorTermSrc = $amorTermSrc;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getAmorType()
    {
      return $this->amorType;
    }

    /**
     * @param SearchEnumMultiSelectField $amorType
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
     */
    public function setAmorType($amorType)
    {
      $this->amorType = $amorType;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getContraAccount()
    {
      return $this->contraAccount;
    }

    /**
     * @param SearchMultiSelectField $contraAccount
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
     */
    public function setContraAccount($contraAccount)
    {
      $this->contraAccount = $contraAccount;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getDeferralAccount()
    {
      return $this->deferralAccount;
    }

    /**
     * @param SearchMultiSelectField $deferralAccount
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
     */
    public function setDeferralAccount($deferralAccount)
    {
      $this->deferralAccount = $deferralAccount;
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
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
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
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
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
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
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
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
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
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getPeriodOffset()
    {
      return $this->periodOffset;
    }

    /**
     * @param SearchLongField $periodOffset
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
     */
    public function setPeriodOffset($periodOffset)
    {
      $this->periodOffset = $periodOffset;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getTargetAccount()
    {
      return $this->targetAccount;
    }

    /**
     * @param SearchMultiSelectField $targetAccount
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
     */
    public function setTargetAccount($targetAccount)
    {
      $this->targetAccount = $targetAccount;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getUseForeignAmounts()
    {
      return $this->useForeignAmounts;
    }

    /**
     * @param SearchBooleanField $useForeignAmounts
     * @return \Nzolt\NetSuite\RevRecTemplateSearchBasic
     */
    public function setUseForeignAmounts($useForeignAmounts)
    {
      $this->useForeignAmounts = $useForeignAmounts;
      return $this;
    }

}
