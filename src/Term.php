<?php

namespace Nzolt\NetSuite;

class Term extends Record
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $dateDriven
     */
    protected $dateDriven = null;

    /**
     * @var int $daysUntilNetDue
     */
    protected $daysUntilNetDue = null;

    /**
     * @var float $discountPercent
     */
    protected $discountPercent = null;

    /**
     * @var int $daysUntilExpiry
     */
    protected $daysUntilExpiry = null;

    /**
     * @var int $dayOfMonthNetDue
     */
    protected $dayOfMonthNetDue = null;

    /**
     * @var int $dueNextMonthIfWithinDays
     */
    protected $dueNextMonthIfWithinDays = null;

    /**
     * @var float $discountPercentDateDriven
     */
    protected $discountPercentDateDriven = null;

    /**
     * @var int $dayDiscountExpires
     */
    protected $dayDiscountExpires = null;

    /**
     * @var boolean $preferred
     */
    protected $preferred = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

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
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\Term
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDateDriven()
    {
      return $this->dateDriven;
    }

    /**
     * @param boolean $dateDriven
     * @return \Nzolt\NetSuite\Term
     */
    public function setDateDriven($dateDriven)
    {
      $this->dateDriven = $dateDriven;
      return $this;
    }

    /**
     * @return int
     */
    public function getDaysUntilNetDue()
    {
      return $this->daysUntilNetDue;
    }

    /**
     * @param int $daysUntilNetDue
     * @return \Nzolt\NetSuite\Term
     */
    public function setDaysUntilNetDue($daysUntilNetDue)
    {
      $this->daysUntilNetDue = $daysUntilNetDue;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPercent()
    {
      return $this->discountPercent;
    }

    /**
     * @param float $discountPercent
     * @return \Nzolt\NetSuite\Term
     */
    public function setDiscountPercent($discountPercent)
    {
      $this->discountPercent = $discountPercent;
      return $this;
    }

    /**
     * @return int
     */
    public function getDaysUntilExpiry()
    {
      return $this->daysUntilExpiry;
    }

    /**
     * @param int $daysUntilExpiry
     * @return \Nzolt\NetSuite\Term
     */
    public function setDaysUntilExpiry($daysUntilExpiry)
    {
      $this->daysUntilExpiry = $daysUntilExpiry;
      return $this;
    }

    /**
     * @return int
     */
    public function getDayOfMonthNetDue()
    {
      return $this->dayOfMonthNetDue;
    }

    /**
     * @param int $dayOfMonthNetDue
     * @return \Nzolt\NetSuite\Term
     */
    public function setDayOfMonthNetDue($dayOfMonthNetDue)
    {
      $this->dayOfMonthNetDue = $dayOfMonthNetDue;
      return $this;
    }

    /**
     * @return int
     */
    public function getDueNextMonthIfWithinDays()
    {
      return $this->dueNextMonthIfWithinDays;
    }

    /**
     * @param int $dueNextMonthIfWithinDays
     * @return \Nzolt\NetSuite\Term
     */
    public function setDueNextMonthIfWithinDays($dueNextMonthIfWithinDays)
    {
      $this->dueNextMonthIfWithinDays = $dueNextMonthIfWithinDays;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountPercentDateDriven()
    {
      return $this->discountPercentDateDriven;
    }

    /**
     * @param float $discountPercentDateDriven
     * @return \Nzolt\NetSuite\Term
     */
    public function setDiscountPercentDateDriven($discountPercentDateDriven)
    {
      $this->discountPercentDateDriven = $discountPercentDateDriven;
      return $this;
    }

    /**
     * @return int
     */
    public function getDayDiscountExpires()
    {
      return $this->dayDiscountExpires;
    }

    /**
     * @param int $dayDiscountExpires
     * @return \Nzolt\NetSuite\Term
     */
    public function setDayDiscountExpires($dayDiscountExpires)
    {
      $this->dayDiscountExpires = $dayDiscountExpires;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPreferred()
    {
      return $this->preferred;
    }

    /**
     * @param boolean $preferred
     * @return \Nzolt\NetSuite\Term
     */
    public function setPreferred($preferred)
    {
      $this->preferred = $preferred;
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
     * @return \Nzolt\NetSuite\Term
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
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
     * @return \Nzolt\NetSuite\Term
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
     * @return \Nzolt\NetSuite\Term
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
