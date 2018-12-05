<?php

namespace Nzolt\NetSuite;

class TermSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnBooleanField[] $dateDriven
     */
    protected $dateDriven = null;

    /**
     * @var SearchColumnLongField[] $dayDiscountExpires
     */
    protected $dayDiscountExpires = null;

    /**
     * @var SearchColumnLongField[] $dayOfMonthNetDue
     */
    protected $dayOfMonthNetDue = null;

    /**
     * @var SearchColumnLongField[] $daysUntilExpiry
     */
    protected $daysUntilExpiry = null;

    /**
     * @var SearchColumnLongField[] $daysUntilNetDue
     */
    protected $daysUntilNetDue = null;

    /**
     * @var SearchColumnDoubleField[] $discountPercent
     */
    protected $discountPercent = null;

    /**
     * @var SearchColumnDoubleField[] $discountPercentDateDriven
     */
    protected $discountPercentDateDriven = null;

    /**
     * @var SearchColumnLongField[] $dueNextMonthIfWithinDays
     */
    protected $dueNextMonthIfWithinDays = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isInactive
     */
    protected $isInactive = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnBooleanField[] $preferred
     */
    protected $preferred = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getDateDriven()
    {
      return $this->dateDriven;
    }

    /**
     * @param SearchColumnBooleanField[] $dateDriven
     * @return \Nzolt\NetSuite\TermSearchRowBasic
     */
    public function setDateDriven(array $dateDriven = null)
    {
      $this->dateDriven = $dateDriven;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDayDiscountExpires()
    {
      return $this->dayDiscountExpires;
    }

    /**
     * @param SearchColumnLongField[] $dayDiscountExpires
     * @return \Nzolt\NetSuite\TermSearchRowBasic
     */
    public function setDayDiscountExpires(array $dayDiscountExpires = null)
    {
      $this->dayDiscountExpires = $dayDiscountExpires;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDayOfMonthNetDue()
    {
      return $this->dayOfMonthNetDue;
    }

    /**
     * @param SearchColumnLongField[] $dayOfMonthNetDue
     * @return \Nzolt\NetSuite\TermSearchRowBasic
     */
    public function setDayOfMonthNetDue(array $dayOfMonthNetDue = null)
    {
      $this->dayOfMonthNetDue = $dayOfMonthNetDue;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDaysUntilExpiry()
    {
      return $this->daysUntilExpiry;
    }

    /**
     * @param SearchColumnLongField[] $daysUntilExpiry
     * @return \Nzolt\NetSuite\TermSearchRowBasic
     */
    public function setDaysUntilExpiry(array $daysUntilExpiry = null)
    {
      $this->daysUntilExpiry = $daysUntilExpiry;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDaysUntilNetDue()
    {
      return $this->daysUntilNetDue;
    }

    /**
     * @param SearchColumnLongField[] $daysUntilNetDue
     * @return \Nzolt\NetSuite\TermSearchRowBasic
     */
    public function setDaysUntilNetDue(array $daysUntilNetDue = null)
    {
      $this->daysUntilNetDue = $daysUntilNetDue;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDiscountPercent()
    {
      return $this->discountPercent;
    }

    /**
     * @param SearchColumnDoubleField[] $discountPercent
     * @return \Nzolt\NetSuite\TermSearchRowBasic
     */
    public function setDiscountPercent(array $discountPercent = null)
    {
      $this->discountPercent = $discountPercent;
      return $this;
    }

    /**
     * @return SearchColumnDoubleField[]
     */
    public function getDiscountPercentDateDriven()
    {
      return $this->discountPercentDateDriven;
    }

    /**
     * @param SearchColumnDoubleField[] $discountPercentDateDriven
     * @return \Nzolt\NetSuite\TermSearchRowBasic
     */
    public function setDiscountPercentDateDriven(array $discountPercentDateDriven = null)
    {
      $this->discountPercentDateDriven = $discountPercentDateDriven;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDueNextMonthIfWithinDays()
    {
      return $this->dueNextMonthIfWithinDays;
    }

    /**
     * @param SearchColumnLongField[] $dueNextMonthIfWithinDays
     * @return \Nzolt\NetSuite\TermSearchRowBasic
     */
    public function setDueNextMonthIfWithinDays(array $dueNextMonthIfWithinDays = null)
    {
      $this->dueNextMonthIfWithinDays = $dueNextMonthIfWithinDays;
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
     * @return \Nzolt\NetSuite\TermSearchRowBasic
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
     * @return \Nzolt\NetSuite\TermSearchRowBasic
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
     * @return \Nzolt\NetSuite\TermSearchRowBasic
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
     * @return \Nzolt\NetSuite\TermSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getPreferred()
    {
      return $this->preferred;
    }

    /**
     * @param SearchColumnBooleanField[] $preferred
     * @return \Nzolt\NetSuite\TermSearchRowBasic
     */
    public function setPreferred(array $preferred = null)
    {
      $this->preferred = $preferred;
      return $this;
    }

}
