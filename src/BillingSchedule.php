<?php

namespace Nzolt\NetSuite;

class BillingSchedule extends Record
{

    /**
     * @var BillingScheduleType $scheduleType
     */
    protected $scheduleType = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var BillingScheduleRecurrencePattern $recurrencePattern
     */
    protected $recurrencePattern = null;

    /**
     * @var RecordRef $project
     */
    protected $project = null;

    /**
     * @var string $initialAmount
     */
    protected $initialAmount = null;

    /**
     * @var RecordRef $initialTerms
     */
    protected $initialTerms = null;

    /**
     * @var BillingScheduleFrequency $frequency
     */
    protected $frequency = null;

    /**
     * @var RecurrenceDowMaskList $recurrenceDowMaskList
     */
    protected $recurrenceDowMaskList = null;

    /**
     * @var BillingScheduleRecurrenceMode $yearMode
     */
    protected $yearMode = null;

    /**
     * @var BillingScheduleYearDowim $yearDowim
     */
    protected $yearDowim = null;

    /**
     * @var BillingScheduleYearDow $yearDow
     */
    protected $yearDow = null;

    /**
     * @var BillingScheduleYearDowimMonth $yearDowimMonth
     */
    protected $yearDowimMonth = null;

    /**
     * @var BillingScheduleYearMonth $yearMonth
     */
    protected $yearMonth = null;

    /**
     * @var int $yearDom
     */
    protected $yearDom = null;

    /**
     * @var BillingScheduleRecurrenceMode $monthMode
     */
    protected $monthMode = null;

    /**
     * @var BillingScheduleMonthDowim $monthDowim
     */
    protected $monthDowim = null;

    /**
     * @var BillingScheduleMonthDow $monthDow
     */
    protected $monthDow = null;

    /**
     * @var int $monthDom
     */
    protected $monthDom = null;

    /**
     * @var int $dayPeriod
     */
    protected $dayPeriod = null;

    /**
     * @var BillingScheduleRepeatEvery $repeatEvery
     */
    protected $repeatEvery = null;

    /**
     * @var boolean $billForActuals
     */
    protected $billForActuals = null;

    /**
     * @var int $numberRemaining
     */
    protected $numberRemaining = null;

    /**
     * @var boolean $inArrears
     */
    protected $inArrears = null;

    /**
     * @var RecordRef $recurrenceTerms
     */
    protected $recurrenceTerms = null;

    /**
     * @var boolean $isPublic
     */
    protected $isPublic = null;

    /**
     * @var boolean $applyToSubtotal
     */
    protected $applyToSubtotal = null;

    /**
     * @var RecordRef $transaction
     */
    protected $transaction = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var \DateTime $seriesStartDate
     */
    protected $seriesStartDate = null;

    /**
     * @var BillingScheduleRecurrenceList $recurrenceList
     */
    protected $recurrenceList = null;

    /**
     * @var BillingScheduleMilestoneList $milestoneList
     */
    protected $milestoneList = null;

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
     * @return BillingScheduleType
     */
    public function getScheduleType()
    {
      return $this->scheduleType;
    }

    /**
     * @param BillingScheduleType $scheduleType
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setScheduleType($scheduleType)
    {
      $this->scheduleType = $scheduleType;
      return $this;
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
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return BillingScheduleRecurrencePattern
     */
    public function getRecurrencePattern()
    {
      return $this->recurrencePattern;
    }

    /**
     * @param BillingScheduleRecurrencePattern $recurrencePattern
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setRecurrencePattern($recurrencePattern)
    {
      $this->recurrencePattern = $recurrencePattern;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getProject()
    {
      return $this->project;
    }

    /**
     * @param RecordRef $project
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setProject($project)
    {
      $this->project = $project;
      return $this;
    }

    /**
     * @return string
     */
    public function getInitialAmount()
    {
      return $this->initialAmount;
    }

    /**
     * @param string $initialAmount
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setInitialAmount($initialAmount)
    {
      $this->initialAmount = $initialAmount;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getInitialTerms()
    {
      return $this->initialTerms;
    }

    /**
     * @param RecordRef $initialTerms
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setInitialTerms($initialTerms)
    {
      $this->initialTerms = $initialTerms;
      return $this;
    }

    /**
     * @return BillingScheduleFrequency
     */
    public function getFrequency()
    {
      return $this->frequency;
    }

    /**
     * @param BillingScheduleFrequency $frequency
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setFrequency($frequency)
    {
      $this->frequency = $frequency;
      return $this;
    }

    /**
     * @return RecurrenceDowMaskList
     */
    public function getRecurrenceDowMaskList()
    {
      return $this->recurrenceDowMaskList;
    }

    /**
     * @param RecurrenceDowMaskList $recurrenceDowMaskList
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setRecurrenceDowMaskList($recurrenceDowMaskList)
    {
      $this->recurrenceDowMaskList = $recurrenceDowMaskList;
      return $this;
    }

    /**
     * @return BillingScheduleRecurrenceMode
     */
    public function getYearMode()
    {
      return $this->yearMode;
    }

    /**
     * @param BillingScheduleRecurrenceMode $yearMode
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setYearMode($yearMode)
    {
      $this->yearMode = $yearMode;
      return $this;
    }

    /**
     * @return BillingScheduleYearDowim
     */
    public function getYearDowim()
    {
      return $this->yearDowim;
    }

    /**
     * @param BillingScheduleYearDowim $yearDowim
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setYearDowim($yearDowim)
    {
      $this->yearDowim = $yearDowim;
      return $this;
    }

    /**
     * @return BillingScheduleYearDow
     */
    public function getYearDow()
    {
      return $this->yearDow;
    }

    /**
     * @param BillingScheduleYearDow $yearDow
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setYearDow($yearDow)
    {
      $this->yearDow = $yearDow;
      return $this;
    }

    /**
     * @return BillingScheduleYearDowimMonth
     */
    public function getYearDowimMonth()
    {
      return $this->yearDowimMonth;
    }

    /**
     * @param BillingScheduleYearDowimMonth $yearDowimMonth
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setYearDowimMonth($yearDowimMonth)
    {
      $this->yearDowimMonth = $yearDowimMonth;
      return $this;
    }

    /**
     * @return BillingScheduleYearMonth
     */
    public function getYearMonth()
    {
      return $this->yearMonth;
    }

    /**
     * @param BillingScheduleYearMonth $yearMonth
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setYearMonth($yearMonth)
    {
      $this->yearMonth = $yearMonth;
      return $this;
    }

    /**
     * @return int
     */
    public function getYearDom()
    {
      return $this->yearDom;
    }

    /**
     * @param int $yearDom
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setYearDom($yearDom)
    {
      $this->yearDom = $yearDom;
      return $this;
    }

    /**
     * @return BillingScheduleRecurrenceMode
     */
    public function getMonthMode()
    {
      return $this->monthMode;
    }

    /**
     * @param BillingScheduleRecurrenceMode $monthMode
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setMonthMode($monthMode)
    {
      $this->monthMode = $monthMode;
      return $this;
    }

    /**
     * @return BillingScheduleMonthDowim
     */
    public function getMonthDowim()
    {
      return $this->monthDowim;
    }

    /**
     * @param BillingScheduleMonthDowim $monthDowim
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setMonthDowim($monthDowim)
    {
      $this->monthDowim = $monthDowim;
      return $this;
    }

    /**
     * @return BillingScheduleMonthDow
     */
    public function getMonthDow()
    {
      return $this->monthDow;
    }

    /**
     * @param BillingScheduleMonthDow $monthDow
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setMonthDow($monthDow)
    {
      $this->monthDow = $monthDow;
      return $this;
    }

    /**
     * @return int
     */
    public function getMonthDom()
    {
      return $this->monthDom;
    }

    /**
     * @param int $monthDom
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setMonthDom($monthDom)
    {
      $this->monthDom = $monthDom;
      return $this;
    }

    /**
     * @return int
     */
    public function getDayPeriod()
    {
      return $this->dayPeriod;
    }

    /**
     * @param int $dayPeriod
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setDayPeriod($dayPeriod)
    {
      $this->dayPeriod = $dayPeriod;
      return $this;
    }

    /**
     * @return BillingScheduleRepeatEvery
     */
    public function getRepeatEvery()
    {
      return $this->repeatEvery;
    }

    /**
     * @param BillingScheduleRepeatEvery $repeatEvery
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setRepeatEvery($repeatEvery)
    {
      $this->repeatEvery = $repeatEvery;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBillForActuals()
    {
      return $this->billForActuals;
    }

    /**
     * @param boolean $billForActuals
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setBillForActuals($billForActuals)
    {
      $this->billForActuals = $billForActuals;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberRemaining()
    {
      return $this->numberRemaining;
    }

    /**
     * @param int $numberRemaining
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setNumberRemaining($numberRemaining)
    {
      $this->numberRemaining = $numberRemaining;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInArrears()
    {
      return $this->inArrears;
    }

    /**
     * @param boolean $inArrears
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setInArrears($inArrears)
    {
      $this->inArrears = $inArrears;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getRecurrenceTerms()
    {
      return $this->recurrenceTerms;
    }

    /**
     * @param RecordRef $recurrenceTerms
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setRecurrenceTerms($recurrenceTerms)
    {
      $this->recurrenceTerms = $recurrenceTerms;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPublic()
    {
      return $this->isPublic;
    }

    /**
     * @param boolean $isPublic
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setIsPublic($isPublic)
    {
      $this->isPublic = $isPublic;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getApplyToSubtotal()
    {
      return $this->applyToSubtotal;
    }

    /**
     * @param boolean $applyToSubtotal
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setApplyToSubtotal($applyToSubtotal)
    {
      $this->applyToSubtotal = $applyToSubtotal;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getTransaction()
    {
      return $this->transaction;
    }

    /**
     * @param RecordRef $transaction
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setTransaction($transaction)
    {
      $this->transaction = $transaction;
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
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSeriesStartDate()
    {
      if ($this->seriesStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->seriesStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $seriesStartDate
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setSeriesStartDate(\DateTime $seriesStartDate = null)
    {
      if ($seriesStartDate == null) {
       $this->seriesStartDate = null;
      } else {
        $this->seriesStartDate = $seriesStartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return BillingScheduleRecurrenceList
     */
    public function getRecurrenceList()
    {
      return $this->recurrenceList;
    }

    /**
     * @param BillingScheduleRecurrenceList $recurrenceList
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setRecurrenceList($recurrenceList)
    {
      $this->recurrenceList = $recurrenceList;
      return $this;
    }

    /**
     * @return BillingScheduleMilestoneList
     */
    public function getMilestoneList()
    {
      return $this->milestoneList;
    }

    /**
     * @param BillingScheduleMilestoneList $milestoneList
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setMilestoneList($milestoneList)
    {
      $this->milestoneList = $milestoneList;
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
     * @return \Nzolt\NetSuite\BillingSchedule
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
     * @return \Nzolt\NetSuite\BillingSchedule
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
