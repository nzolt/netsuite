<?php

namespace Nzolt\NetSuite;

class RevRecTemplateSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnStringField[] $amorMethod
     */
    protected $amorMethod = null;

    /**
     * @var SearchColumnStringField[] $amorPeriod
     */
    protected $amorPeriod = null;

    /**
     * @var SearchColumnStringField[] $amorStartOffset
     */
    protected $amorStartOffset = null;

    /**
     * @var SearchColumnStringField[] $amorTermSrc
     */
    protected $amorTermSrc = null;

    /**
     * @var SearchColumnStringField[] $amorType
     */
    protected $amorType = null;

    /**
     * @var SearchColumnStringField[] $contraAccount
     */
    protected $contraAccount = null;

    /**
     * @var SearchColumnStringField[] $deferralAccount
     */
    protected $deferralAccount = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnStringField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnStringField[] $periodOffset
     */
    protected $periodOffset = null;

    /**
     * @var SearchColumnStringField[] $targetAccount
     */
    protected $targetAccount = null;

    /**
     * @var SearchColumnBooleanField[] $useForeignAmounts
     */
    protected $useForeignAmounts = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAmorMethod()
    {
      return $this->amorMethod;
    }

    /**
     * @param SearchColumnStringField[] $amorMethod
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRowBasic
     */
    public function setAmorMethod(array $amorMethod = null)
    {
      $this->amorMethod = $amorMethod;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAmorPeriod()
    {
      return $this->amorPeriod;
    }

    /**
     * @param SearchColumnStringField[] $amorPeriod
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRowBasic
     */
    public function setAmorPeriod(array $amorPeriod = null)
    {
      $this->amorPeriod = $amorPeriod;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAmorStartOffset()
    {
      return $this->amorStartOffset;
    }

    /**
     * @param SearchColumnStringField[] $amorStartOffset
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRowBasic
     */
    public function setAmorStartOffset(array $amorStartOffset = null)
    {
      $this->amorStartOffset = $amorStartOffset;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAmorTermSrc()
    {
      return $this->amorTermSrc;
    }

    /**
     * @param SearchColumnStringField[] $amorTermSrc
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRowBasic
     */
    public function setAmorTermSrc(array $amorTermSrc = null)
    {
      $this->amorTermSrc = $amorTermSrc;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getAmorType()
    {
      return $this->amorType;
    }

    /**
     * @param SearchColumnStringField[] $amorType
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRowBasic
     */
    public function setAmorType(array $amorType = null)
    {
      $this->amorType = $amorType;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getContraAccount()
    {
      return $this->contraAccount;
    }

    /**
     * @param SearchColumnStringField[] $contraAccount
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRowBasic
     */
    public function setContraAccount(array $contraAccount = null)
    {
      $this->contraAccount = $contraAccount;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDeferralAccount()
    {
      return $this->deferralAccount;
    }

    /**
     * @param SearchColumnStringField[] $deferralAccount
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRowBasic
     */
    public function setDeferralAccount(array $deferralAccount = null)
    {
      $this->deferralAccount = $deferralAccount;
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
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRowBasic
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
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param SearchColumnStringField[] $isInactive
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getPeriodOffset()
    {
      return $this->periodOffset;
    }

    /**
     * @param SearchColumnStringField[] $periodOffset
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRowBasic
     */
    public function setPeriodOffset(array $periodOffset = null)
    {
      $this->periodOffset = $periodOffset;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getTargetAccount()
    {
      return $this->targetAccount;
    }

    /**
     * @param SearchColumnStringField[] $targetAccount
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRowBasic
     */
    public function setTargetAccount(array $targetAccount = null)
    {
      $this->targetAccount = $targetAccount;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getUseForeignAmounts()
    {
      return $this->useForeignAmounts;
    }

    /**
     * @param SearchColumnBooleanField[] $useForeignAmounts
     * @return \Nzolt\NetSuite\RevRecTemplateSearchRowBasic
     */
    public function setUseForeignAmounts(array $useForeignAmounts = null)
    {
      $this->useForeignAmounts = $useForeignAmounts;
      return $this;
    }

}
