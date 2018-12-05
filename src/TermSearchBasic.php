<?php

namespace Nzolt\NetSuite;

class TermSearchBasic extends SearchRecordBasic
{

    /**
     * @var SearchBooleanField $dateDriven
     */
    protected $dateDriven = null;

    /**
     * @var SearchLongField $dayDiscountExpires
     */
    protected $dayDiscountExpires = null;

    /**
     * @var SearchLongField $dayOfMonthNetDue
     */
    protected $dayOfMonthNetDue = null;

    /**
     * @var SearchLongField $daysUntilExpiry
     */
    protected $daysUntilExpiry = null;

    /**
     * @var SearchLongField $daysUntilNetDue
     */
    protected $daysUntilNetDue = null;

    /**
     * @var SearchDoubleField $discountPercent
     */
    protected $discountPercent = null;

    /**
     * @var SearchDoubleField $discountPercentDateDriven
     */
    protected $discountPercentDateDriven = null;

    /**
     * @var SearchLongField $dueNextMonthIfWithinDays
     */
    protected $dueNextMonthIfWithinDays = null;

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
     * @var SearchBooleanField $preferred
     */
    protected $preferred = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchBooleanField
     */
    public function getDateDriven()
    {
      return $this->dateDriven;
    }

    /**
     * @param SearchBooleanField $dateDriven
     * @return \Nzolt\NetSuite\TermSearchBasic
     */
    public function setDateDriven($dateDriven)
    {
      $this->dateDriven = $dateDriven;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDayDiscountExpires()
    {
      return $this->dayDiscountExpires;
    }

    /**
     * @param SearchLongField $dayDiscountExpires
     * @return \Nzolt\NetSuite\TermSearchBasic
     */
    public function setDayDiscountExpires($dayDiscountExpires)
    {
      $this->dayDiscountExpires = $dayDiscountExpires;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDayOfMonthNetDue()
    {
      return $this->dayOfMonthNetDue;
    }

    /**
     * @param SearchLongField $dayOfMonthNetDue
     * @return \Nzolt\NetSuite\TermSearchBasic
     */
    public function setDayOfMonthNetDue($dayOfMonthNetDue)
    {
      $this->dayOfMonthNetDue = $dayOfMonthNetDue;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDaysUntilExpiry()
    {
      return $this->daysUntilExpiry;
    }

    /**
     * @param SearchLongField $daysUntilExpiry
     * @return \Nzolt\NetSuite\TermSearchBasic
     */
    public function setDaysUntilExpiry($daysUntilExpiry)
    {
      $this->daysUntilExpiry = $daysUntilExpiry;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDaysUntilNetDue()
    {
      return $this->daysUntilNetDue;
    }

    /**
     * @param SearchLongField $daysUntilNetDue
     * @return \Nzolt\NetSuite\TermSearchBasic
     */
    public function setDaysUntilNetDue($daysUntilNetDue)
    {
      $this->daysUntilNetDue = $daysUntilNetDue;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDiscountPercent()
    {
      return $this->discountPercent;
    }

    /**
     * @param SearchDoubleField $discountPercent
     * @return \Nzolt\NetSuite\TermSearchBasic
     */
    public function setDiscountPercent($discountPercent)
    {
      $this->discountPercent = $discountPercent;
      return $this;
    }

    /**
     * @return SearchDoubleField
     */
    public function getDiscountPercentDateDriven()
    {
      return $this->discountPercentDateDriven;
    }

    /**
     * @param SearchDoubleField $discountPercentDateDriven
     * @return \Nzolt\NetSuite\TermSearchBasic
     */
    public function setDiscountPercentDateDriven($discountPercentDateDriven)
    {
      $this->discountPercentDateDriven = $discountPercentDateDriven;
      return $this;
    }

    /**
     * @return SearchLongField
     */
    public function getDueNextMonthIfWithinDays()
    {
      return $this->dueNextMonthIfWithinDays;
    }

    /**
     * @param SearchLongField $dueNextMonthIfWithinDays
     * @return \Nzolt\NetSuite\TermSearchBasic
     */
    public function setDueNextMonthIfWithinDays($dueNextMonthIfWithinDays)
    {
      $this->dueNextMonthIfWithinDays = $dueNextMonthIfWithinDays;
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
     * @return \Nzolt\NetSuite\TermSearchBasic
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
     * @return \Nzolt\NetSuite\TermSearchBasic
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
     * @return \Nzolt\NetSuite\TermSearchBasic
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
     * @return \Nzolt\NetSuite\TermSearchBasic
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
     * @return \Nzolt\NetSuite\TermSearchBasic
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
     * @return \Nzolt\NetSuite\TermSearchBasic
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchBooleanField
     */
    public function getPreferred()
    {
      return $this->preferred;
    }

    /**
     * @param SearchBooleanField $preferred
     * @return \Nzolt\NetSuite\TermSearchBasic
     */
    public function setPreferred($preferred)
    {
      $this->preferred = $preferred;
      return $this;
    }

}
