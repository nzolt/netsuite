<?php

namespace Nzolt\NetSuite;

class BillingScheduleSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnBooleanField[] $applyToSubtotal
     */
    protected $applyToSubtotal = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnEnumSelectField[] $frequency
     */
    protected $frequency = null;

    /**
     * @var SearchColumnBooleanField[] $inArrears
     */
    protected $inArrears = null;

    /**
     * @var SearchColumnStringField[] $initialAmount
     */
    protected $initialAmount = null;

    /**
     * @var SearchColumnStringField[] $initialTerms
     */
    protected $initialTerms = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnBooleanField[] $isPublic
     */
    protected $isPublic = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnLongField[] $recurrenceCount
     */
    protected $recurrenceCount = null;

    /**
     * @var SearchColumnEnumSelectField[] $recurrencePattern
     */
    protected $recurrencePattern = null;

    /**
     * @var SearchColumnStringField[] $recurrenceTerms
     */
    protected $recurrenceTerms = null;

    /**
     * @var SearchColumnLongField[] $repeatEvery
     */
    protected $repeatEvery = null;

    /**
     * @var SearchColumnEnumSelectField[] $type
     */
    protected $type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getApplyToSubtotal()
    {
      return $this->applyToSubtotal;
    }

    /**
     * @param SearchColumnBooleanField[] $applyToSubtotal
     * @return \Nzolt\NetSuite\BillingScheduleSearchRowBasic
     */
    public function setApplyToSubtotal(array $applyToSubtotal = null)
    {
      $this->applyToSubtotal = $applyToSubtotal;
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
     * @return \Nzolt\NetSuite\BillingScheduleSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getFrequency()
    {
      return $this->frequency;
    }

    /**
     * @param SearchColumnEnumSelectField[] $frequency
     * @return \Nzolt\NetSuite\BillingScheduleSearchRowBasic
     */
    public function setFrequency(array $frequency = null)
    {
      $this->frequency = $frequency;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getInArrears()
    {
      return $this->inArrears;
    }

    /**
     * @param SearchColumnBooleanField[] $inArrears
     * @return \Nzolt\NetSuite\BillingScheduleSearchRowBasic
     */
    public function setInArrears(array $inArrears = null)
    {
      $this->inArrears = $inArrears;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getInitialAmount()
    {
      return $this->initialAmount;
    }

    /**
     * @param SearchColumnStringField[] $initialAmount
     * @return \Nzolt\NetSuite\BillingScheduleSearchRowBasic
     */
    public function setInitialAmount(array $initialAmount = null)
    {
      $this->initialAmount = $initialAmount;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getInitialTerms()
    {
      return $this->initialTerms;
    }

    /**
     * @param SearchColumnStringField[] $initialTerms
     * @return \Nzolt\NetSuite\BillingScheduleSearchRowBasic
     */
    public function setInitialTerms(array $initialTerms = null)
    {
      $this->initialTerms = $initialTerms;
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
     * @return \Nzolt\NetSuite\BillingScheduleSearchRowBasic
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
     * @return \Nzolt\NetSuite\BillingScheduleSearchRowBasic
     */
    public function setIsInactive(array $isInactive = null)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsPublic()
    {
      return $this->isPublic;
    }

    /**
     * @param SearchColumnBooleanField[] $isPublic
     * @return \Nzolt\NetSuite\BillingScheduleSearchRowBasic
     */
    public function setIsPublic(array $isPublic = null)
    {
      $this->isPublic = $isPublic;
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
     * @return \Nzolt\NetSuite\BillingScheduleSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getRecurrenceCount()
    {
      return $this->recurrenceCount;
    }

    /**
     * @param SearchColumnLongField[] $recurrenceCount
     * @return \Nzolt\NetSuite\BillingScheduleSearchRowBasic
     */
    public function setRecurrenceCount(array $recurrenceCount = null)
    {
      $this->recurrenceCount = $recurrenceCount;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getRecurrencePattern()
    {
      return $this->recurrencePattern;
    }

    /**
     * @param SearchColumnEnumSelectField[] $recurrencePattern
     * @return \Nzolt\NetSuite\BillingScheduleSearchRowBasic
     */
    public function setRecurrencePattern(array $recurrencePattern = null)
    {
      $this->recurrencePattern = $recurrencePattern;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getRecurrenceTerms()
    {
      return $this->recurrenceTerms;
    }

    /**
     * @param SearchColumnStringField[] $recurrenceTerms
     * @return \Nzolt\NetSuite\BillingScheduleSearchRowBasic
     */
    public function setRecurrenceTerms(array $recurrenceTerms = null)
    {
      $this->recurrenceTerms = $recurrenceTerms;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getRepeatEvery()
    {
      return $this->repeatEvery;
    }

    /**
     * @param SearchColumnLongField[] $repeatEvery
     * @return \Nzolt\NetSuite\BillingScheduleSearchRowBasic
     */
    public function setRepeatEvery(array $repeatEvery = null)
    {
      $this->repeatEvery = $repeatEvery;
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
     * @return \Nzolt\NetSuite\BillingScheduleSearchRowBasic
     */
    public function setType(array $type = null)
    {
      $this->type = $type;
      return $this;
    }

}
