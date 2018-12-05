<?php

namespace Nzolt\NetSuite;

class RevRecSchedule extends Record
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var RevRecScheduleAmortizationType $amortizationType
     */
    protected $amortizationType = null;

    /**
     * @var RevRecScheduleRecurrenceType $recurrenceType
     */
    protected $recurrenceType = null;

    /**
     * @var RevRecScheduleRecogIntervalSrc $recogIntervalSrc
     */
    protected $recogIntervalSrc = null;

    /**
     * @var int $amortizationPeriod
     */
    protected $amortizationPeriod = null;

    /**
     * @var int $periodOffset
     */
    protected $periodOffset = null;

    /**
     * @var int $revRecOffset
     */
    protected $revRecOffset = null;

    /**
     * @var float $initialAmount
     */
    protected $initialAmount = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var RevRecScheduleRecurrenceList $recurrenceList
     */
    protected $recurrenceList = null;

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
     * @return \Nzolt\NetSuite\RevRecSchedule
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return RevRecScheduleAmortizationType
     */
    public function getAmortizationType()
    {
      return $this->amortizationType;
    }

    /**
     * @param RevRecScheduleAmortizationType $amortizationType
     * @return \Nzolt\NetSuite\RevRecSchedule
     */
    public function setAmortizationType($amortizationType)
    {
      $this->amortizationType = $amortizationType;
      return $this;
    }

    /**
     * @return RevRecScheduleRecurrenceType
     */
    public function getRecurrenceType()
    {
      return $this->recurrenceType;
    }

    /**
     * @param RevRecScheduleRecurrenceType $recurrenceType
     * @return \Nzolt\NetSuite\RevRecSchedule
     */
    public function setRecurrenceType($recurrenceType)
    {
      $this->recurrenceType = $recurrenceType;
      return $this;
    }

    /**
     * @return RevRecScheduleRecogIntervalSrc
     */
    public function getRecogIntervalSrc()
    {
      return $this->recogIntervalSrc;
    }

    /**
     * @param RevRecScheduleRecogIntervalSrc $recogIntervalSrc
     * @return \Nzolt\NetSuite\RevRecSchedule
     */
    public function setRecogIntervalSrc($recogIntervalSrc)
    {
      $this->recogIntervalSrc = $recogIntervalSrc;
      return $this;
    }

    /**
     * @return int
     */
    public function getAmortizationPeriod()
    {
      return $this->amortizationPeriod;
    }

    /**
     * @param int $amortizationPeriod
     * @return \Nzolt\NetSuite\RevRecSchedule
     */
    public function setAmortizationPeriod($amortizationPeriod)
    {
      $this->amortizationPeriod = $amortizationPeriod;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriodOffset()
    {
      return $this->periodOffset;
    }

    /**
     * @param int $periodOffset
     * @return \Nzolt\NetSuite\RevRecSchedule
     */
    public function setPeriodOffset($periodOffset)
    {
      $this->periodOffset = $periodOffset;
      return $this;
    }

    /**
     * @return int
     */
    public function getRevRecOffset()
    {
      return $this->revRecOffset;
    }

    /**
     * @param int $revRecOffset
     * @return \Nzolt\NetSuite\RevRecSchedule
     */
    public function setRevRecOffset($revRecOffset)
    {
      $this->revRecOffset = $revRecOffset;
      return $this;
    }

    /**
     * @return float
     */
    public function getInitialAmount()
    {
      return $this->initialAmount;
    }

    /**
     * @param float $initialAmount
     * @return \Nzolt\NetSuite\RevRecSchedule
     */
    public function setInitialAmount($initialAmount)
    {
      $this->initialAmount = $initialAmount;
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
     * @return \Nzolt\NetSuite\RevRecSchedule
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return RevRecScheduleRecurrenceList
     */
    public function getRecurrenceList()
    {
      return $this->recurrenceList;
    }

    /**
     * @param RevRecScheduleRecurrenceList $recurrenceList
     * @return \Nzolt\NetSuite\RevRecSchedule
     */
    public function setRecurrenceList($recurrenceList)
    {
      $this->recurrenceList = $recurrenceList;
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
     * @return \Nzolt\NetSuite\RevRecSchedule
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
     * @return \Nzolt\NetSuite\RevRecSchedule
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
