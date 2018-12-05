<?php

namespace Nzolt\NetSuite;

class BillingScheduleSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchBooleanField $applyToSubtotal
     */
    protected $applyToSubtotal = null;

    /**
     * @var SearchMultiSelectField $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchStringField $externalIdString
     */
    protected $externalIdString = null;

    /**
     * @var SearchEnumMultiSelectField $frequency
     */
    protected $frequency = null;

    /**
     * @var SearchBooleanField $inArrears
     */
    protected $inArrears = null;

    /**
     * @var SearchDoubleField $initialAmount
     */
    protected $initialAmount = null;

    /**
     * @var SearchMultiSelectField $initialTerms
     */
    protected $initialTerms = null;

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
     * @var SearchBooleanField $isPublic
     */
    protected $isPublic = null;

    /**
     * @var SearchStringField $name
     */
    protected $name = null;

    /**
     * @var SearchLongField $recurrenceCount
     */
    protected $recurrenceCount = null;

    /**
     * @var SearchEnumMultiSelectField $recurrencePattern
     */
    protected $recurrencePattern = null;

    /**
     * @var SearchMultiSelectField $recurrenceTerms
     */
    protected $recurrenceTerms = null;

    /**
     * @var SearchLongField $repeatEvery
     */
    protected $repeatEvery = null;

    /**
     * @var SearchEnumMultiSelectField $type
     */
    protected $type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchBooleanField
     */
    public function getApplyToSubtotal()
    {
      return $this->applyToSubtotal;
    }

    /**
     * @param SearchBooleanField $applyToSubtotal
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
     */
    public function setApplyToSubtotal($applyToSubtotal)
    {
      $this->applyToSubtotal = $applyToSubtotal;
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
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
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
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
     */
    public function setExternalIdString($externalIdString)
    {
      $this->externalIdString = $externalIdString;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getFrequency()
    {
      return $this->frequency;
    }

    /**
     * @param SearchEnumMultiSelectField $frequency
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
     */
    public function setFrequency($frequency)
    {
      $this->frequency = $frequency;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getInArrears()
    {
      return $this->inArrears;
    }

    /**
     * @param SearchBooleanField $inArrears
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
     */
    public function setInArrears($inArrears)
    {
      $this->inArrears = $inArrears;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getInitialAmount()
    {
      return $this->initialAmount;
    }

    /**
     * @param SearchDoubleField $initialAmount
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
     */
    public function setInitialAmount($initialAmount)
    {
      $this->initialAmount = $initialAmount;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getInitialTerms()
    {
      return $this->initialTerms;
    }

    /**
     * @param SearchMultiSelectField $initialTerms
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
     */
    public function setInitialTerms($initialTerms)
    {
      $this->initialTerms = $initialTerms;
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
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
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
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
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
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getIsPublic()
    {
      return $this->isPublic;
    }

    /**
     * @param SearchBooleanField $isPublic
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
     */
    public function setIsPublic($isPublic)
    {
      $this->isPublic = $isPublic;
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
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getRecurrenceCount()
    {
      return $this->recurrenceCount;
    }

    /**
     * @param SearchLongField $recurrenceCount
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
     */
    public function setRecurrenceCount($recurrenceCount)
    {
      $this->recurrenceCount = $recurrenceCount;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getRecurrencePattern()
    {
      return $this->recurrencePattern;
    }

    /**
     * @param SearchEnumMultiSelectField $recurrencePattern
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
     */
    public function setRecurrencePattern($recurrencePattern)
    {
      $this->recurrencePattern = $recurrencePattern;
      return $this;
    }

    /**
     * @return SearchMultiSelectField
     */
    public function getRecurrenceTerms()
    {
      return $this->recurrenceTerms;
    }

    /**
     * @param SearchMultiSelectField $recurrenceTerms
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
     */
    public function setRecurrenceTerms($recurrenceTerms)
    {
      $this->recurrenceTerms = $recurrenceTerms;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getRepeatEvery()
    {
      return $this->repeatEvery;
    }

    /**
     * @param SearchLongField $repeatEvery
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
     */
    public function setRepeatEvery($repeatEvery)
    {
      $this->repeatEvery = $repeatEvery;
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
     * @return \Nzolt\NetSuite\BillingScheduleSearchBasic
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
