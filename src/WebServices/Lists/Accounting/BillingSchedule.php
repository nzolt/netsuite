<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleType;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleFrequency;
use Nzolt\NetSuite\WebServices\Platform\Common\RecurrenceDowMaskList;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleRecurrenceMode;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleYearDowim;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleYearDow;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleYearDowimMonth;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleYearMonth;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleMonthDowim;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleMonthDow;
use Nzolt\NetSuite\WebServices\Lists\Accounting\Types\BillingScheduleRepeatEvery;

/**
 * BillingSchedule
 */
class BillingSchedule extends Record {

    /**
     * @access public
     * @var BillingScheduleType
     */
    protected $scheduleType;

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var RecordRef
     */
    public $project;

    /**
     * @access public
     * @var string
     */
    protected $initialAmount;

    /**
     * @access public
     * @var RecordRef
     */
    public $initialTerms;

    /**
     * @access public
     * @var BillingScheduleFrequency
     */
    protected $frequency;

    /**
     * @access public
     * @var RecurrenceDowMaskList
     */
    protected $recurrenceDowMaskList;

    /**
     * @access public
     * @var BillingScheduleRecurrenceMode
     */
    protected $yearMode;

    /**
     * @access public
     * @var BillingScheduleYearDowim
     */
    protected $yearDowim;

    /**
     * @access public
     * @var BillingScheduleYearDow
     */
    protected $yearDow;

    /**
     * @access public
     * @var BillingScheduleYearDowimMonth
     */
    protected $yearDowimMonth;

    /**
     * @access public
     * @var BillingScheduleYearMonth
     */
    protected $yearMonth;

    /**
     * @access public
     * @var integer
     */
    protected $yearDom;

    /**
     * @access public
     * @var BillingScheduleRecurrenceMode
     */
    protected $monthMode;

    /**
     * @access public
     * @var BillingScheduleMonthDowim
     */
    protected $monthDowim;

    /**
     * @access public
     * @var BillingScheduleMonthDow
     */
    protected $monthDow;

    /**
     * @access public
     * @var integer
     */
    protected $monthDom;

    /**
     * @access public
     * @var integer
     */
    protected $dayPeriod;

    /**
     * @access public
     * @var BillingScheduleRepeatEvery
     */
    protected $repeatEvery;

    /**
     * @access public
     * @var boolean
     */
    protected $billForActuals;

    /**
     * @access public
     * @var integer
     */
    protected $numberRemaining;

    /**
     * @access public
     * @var boolean
     */
    protected $inArrears;

    /**
     * @access public
     * @var RecordRef
     */
    public $recurrenceTerms;

    /**
     * @access public
     * @var boolean
     */
    protected $isPublic;

    /**
     * @access public
     * @var boolean
     */
    protected $applyToSubtotal;

    /**
     * @access public
     * @var RecordRef
     */
    public $transaction;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var dateTime
     */
    protected $seriesStartDate;

    /**
     * @access public
     * @var BillingScheduleRecurrenceList
     */
    protected $recurrenceList;

    /**
     * @access public
     * @var BillingScheduleMilestoneList
     */
    protected $milestoneList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"scheduleType" => "BillingScheduleType",
    	"name" => "string",
    	"project" => "RecordRef",
    	"initialAmount" => "string",
    	"initialTerms" => "RecordRef",
    	"frequency" => "BillingScheduleFrequency",
    	"recurrenceDowMaskList" => "RecurrenceDowMaskList",
    	"yearMode" => "BillingScheduleRecurrenceMode",
    	"yearDowim" => "BillingScheduleYearDowim",
    	"yearDow" => "BillingScheduleYearDow",
    	"yearDowimMonth" => "BillingScheduleYearDowimMonth",
    	"yearMonth" => "BillingScheduleYearMonth",
    	"yearDom" => "integer",
    	"monthMode" => "BillingScheduleRecurrenceMode",
    	"monthDowim" => "BillingScheduleMonthDowim",
    	"monthDow" => "BillingScheduleMonthDow",
    	"monthDom" => "integer",
    	"dayPeriod" => "integer",
    	"repeatEvery" => "BillingScheduleRepeatEvery",
    	"billForActuals" => "boolean",
    	"numberRemaining" => "integer",
    	"inArrears" => "boolean",
    	"recurrenceTerms" => "RecordRef",
    	"isPublic" => "boolean",
    	"applyToSubtotal" => "boolean",
    	"transaction" => "RecordRef",
    	"isInactive" => "boolean",
    	"seriesStartDate" => "dateTime",
    	"recurrenceList" => "BillingScheduleRecurrenceList",
    	"milestoneList" => "BillingScheduleMilestoneList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set scheduleType
     *
     * @param BillingScheduleType $scheduleType
     * @return BillingSchedule
     */
    public function setScheduleType(BillingScheduleType $scheduleType) {
        $this->scheduleType = $scheduleType;
        return $this;
    }

    /**
     * Get scheduleType
     *
     * @return BillingScheduleType
     */
    public function getScheduleType() {
        return $this->scheduleType;
    }


    /**
     * Set name
     *
     * @param string $name
     * @return BillingSchedule
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set initialAmount
     *
     * @param string $initialAmount
     * @return BillingSchedule
     */
    public function setInitialAmount($initialAmount) {
        $this->initialAmount = $initialAmount;
        return $this;
    }

    /**
     * Get initialAmount
     *
     * @return string
     */
    public function getInitialAmount() {
        return $this->initialAmount;
    }


    /**
     * Set frequency
     *
     * @param BillingScheduleFrequency $frequency
     * @return BillingSchedule
     */
    public function setFrequency(BillingScheduleFrequency $frequency) {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Get frequency
     *
     * @return BillingScheduleFrequency
     */
    public function getFrequency() {
        return $this->frequency;
    }


    /**
     * Set recurrenceDowMaskList
     *
     * @param RecurrenceDowMaskList $recurrenceDowMaskList
     * @return BillingSchedule
     */
    public function setRecurrenceDowMaskList(RecurrenceDowMaskList $recurrenceDowMaskList) {
        $this->recurrenceDowMaskList = $recurrenceDowMaskList;
        return $this;
    }

    /**
     * Get recurrenceDowMaskList
     *
     * @return RecurrenceDowMaskList
     */
    public function getRecurrenceDowMaskList() {
        return $this->recurrenceDowMaskList;
    }


    /**
     * Set yearMode
     *
     * @param BillingScheduleRecurrenceMode $yearMode
     * @return BillingSchedule
     */
    public function setYearMode(BillingScheduleRecurrenceMode $yearMode) {
        $this->yearMode = $yearMode;
        return $this;
    }

    /**
     * Get yearMode
     *
     * @return BillingScheduleRecurrenceMode
     */
    public function getYearMode() {
        return $this->yearMode;
    }


    /**
     * Set yearDowim
     *
     * @param BillingScheduleYearDowim $yearDowim
     * @return BillingSchedule
     */
    public function setYearDowim(BillingScheduleYearDowim $yearDowim) {
        $this->yearDowim = $yearDowim;
        return $this;
    }

    /**
     * Get yearDowim
     *
     * @return BillingScheduleYearDowim
     */
    public function getYearDowim() {
        return $this->yearDowim;
    }


    /**
     * Set yearDow
     *
     * @param BillingScheduleYearDow $yearDow
     * @return BillingSchedule
     */
    public function setYearDow(BillingScheduleYearDow $yearDow) {
        $this->yearDow = $yearDow;
        return $this;
    }

    /**
     * Get yearDow
     *
     * @return BillingScheduleYearDow
     */
    public function getYearDow() {
        return $this->yearDow;
    }


    /**
     * Set yearDowimMonth
     *
     * @param BillingScheduleYearDowimMonth $yearDowimMonth
     * @return BillingSchedule
     */
    public function setYearDowimMonth(BillingScheduleYearDowimMonth $yearDowimMonth) {
        $this->yearDowimMonth = $yearDowimMonth;
        return $this;
    }

    /**
     * Get yearDowimMonth
     *
     * @return BillingScheduleYearDowimMonth
     */
    public function getYearDowimMonth() {
        return $this->yearDowimMonth;
    }


    /**
     * Set yearMonth
     *
     * @param BillingScheduleYearMonth $yearMonth
     * @return BillingSchedule
     */
    public function setYearMonth(BillingScheduleYearMonth $yearMonth) {
        $this->yearMonth = $yearMonth;
        return $this;
    }

    /**
     * Get yearMonth
     *
     * @return BillingScheduleYearMonth
     */
    public function getYearMonth() {
        return $this->yearMonth;
    }


    /**
     * Set yearDom
     *
     * @param integer $yearDom
     * @return BillingSchedule
     */
    public function setYearDom($yearDom) {
        $this->yearDom = $yearDom;
        return $this;
    }

    /**
     * Get yearDom
     *
     * @return integer
     */
    public function getYearDom() {
        return $this->yearDom;
    }


    /**
     * Set monthMode
     *
     * @param BillingScheduleRecurrenceMode $monthMode
     * @return BillingSchedule
     */
    public function setMonthMode(BillingScheduleRecurrenceMode $monthMode) {
        $this->monthMode = $monthMode;
        return $this;
    }

    /**
     * Get monthMode
     *
     * @return BillingScheduleRecurrenceMode
     */
    public function getMonthMode() {
        return $this->monthMode;
    }


    /**
     * Set monthDowim
     *
     * @param BillingScheduleMonthDowim $monthDowim
     * @return BillingSchedule
     */
    public function setMonthDowim(BillingScheduleMonthDowim $monthDowim) {
        $this->monthDowim = $monthDowim;
        return $this;
    }

    /**
     * Get monthDowim
     *
     * @return BillingScheduleMonthDowim
     */
    public function getMonthDowim() {
        return $this->monthDowim;
    }


    /**
     * Set monthDow
     *
     * @param BillingScheduleMonthDow $monthDow
     * @return BillingSchedule
     */
    public function setMonthDow(BillingScheduleMonthDow $monthDow) {
        $this->monthDow = $monthDow;
        return $this;
    }

    /**
     * Get monthDow
     *
     * @return BillingScheduleMonthDow
     */
    public function getMonthDow() {
        return $this->monthDow;
    }


    /**
     * Set monthDom
     *
     * @param integer $monthDom
     * @return BillingSchedule
     */
    public function setMonthDom($monthDom) {
        $this->monthDom = $monthDom;
        return $this;
    }

    /**
     * Get monthDom
     *
     * @return integer
     */
    public function getMonthDom() {
        return $this->monthDom;
    }


    /**
     * Set dayPeriod
     *
     * @param integer $dayPeriod
     * @return BillingSchedule
     */
    public function setDayPeriod($dayPeriod) {
        $this->dayPeriod = $dayPeriod;
        return $this;
    }

    /**
     * Get dayPeriod
     *
     * @return integer
     */
    public function getDayPeriod() {
        return $this->dayPeriod;
    }


    /**
     * Set repeatEvery
     *
     * @param BillingScheduleRepeatEvery $repeatEvery
     * @return BillingSchedule
     */
    public function setRepeatEvery(BillingScheduleRepeatEvery $repeatEvery) {
        $this->repeatEvery = $repeatEvery;
        return $this;
    }

    /**
     * Get repeatEvery
     *
     * @return BillingScheduleRepeatEvery
     */
    public function getRepeatEvery() {
        return $this->repeatEvery;
    }


    /**
     * Set billForActuals
     *
     * @param boolean $billForActuals
     * @return BillingSchedule
     */
    public function setBillForActuals($billForActuals) {
        $this->billForActuals = $billForActuals;
        return $this;
    }

    /**
     * Get billForActuals
     *
     * @return boolean
     */
    public function getBillForActuals() {
        return $this->billForActuals;
    }


    /**
     * Set numberRemaining
     *
     * @param integer $numberRemaining
     * @return BillingSchedule
     */
    public function setNumberRemaining($numberRemaining) {
        $this->numberRemaining = $numberRemaining;
        return $this;
    }

    /**
     * Get numberRemaining
     *
     * @return integer
     */
    public function getNumberRemaining() {
        return $this->numberRemaining;
    }


    /**
     * Set inArrears
     *
     * @param boolean $inArrears
     * @return BillingSchedule
     */
    public function setInArrears($inArrears) {
        $this->inArrears = $inArrears;
        return $this;
    }

    /**
     * Get inArrears
     *
     * @return boolean
     */
    public function getInArrears() {
        return $this->inArrears;
    }


    /**
     * Set isPublic
     *
     * @param boolean $isPublic
     * @return BillingSchedule
     */
    public function setIsPublic($isPublic) {
        $this->isPublic = $isPublic;
        return $this;
    }

    /**
     * Get isPublic
     *
     * @return boolean
     */
    public function getIsPublic() {
        return $this->isPublic;
    }


    /**
     * Set applyToSubtotal
     *
     * @param boolean $applyToSubtotal
     * @return BillingSchedule
     */
    public function setApplyToSubtotal($applyToSubtotal) {
        $this->applyToSubtotal = $applyToSubtotal;
        return $this;
    }

    /**
     * Get applyToSubtotal
     *
     * @return boolean
     */
    public function getApplyToSubtotal() {
        return $this->applyToSubtotal;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return BillingSchedule
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set seriesStartDate
     *
     * @param \DateTime $seriesStartDate
     * @return BillingSchedule
     */
    public function setSeriesStartDate(\DateTime $seriesStartDate) {
        $this->seriesStartDate = $seriesStartDate->format('c');
        return $this;
    }

    /**
     * Get seriesStartDate
     *
     * @return \DateTime
     */
    public function getSeriesStartDate() {
        return new \DateTime($this->seriesStartDate);
    }


    /**
     * Set recurrenceList
     *
     * @param BillingScheduleRecurrenceList $recurrenceList
     * @return BillingSchedule
     */
    public function setRecurrenceList(BillingScheduleRecurrenceList $recurrenceList) {
        $this->recurrenceList = $recurrenceList;
        return $this;
    }

    /**
     * Get recurrenceList
     *
     * @return BillingScheduleRecurrenceList
     */
    public function getRecurrenceList() {
        return $this->recurrenceList;
    }


    /**
     * Set milestoneList
     *
     * @param BillingScheduleMilestoneList $milestoneList
     * @return BillingSchedule
     */
    public function setMilestoneList(BillingScheduleMilestoneList $milestoneList) {
        $this->milestoneList = $milestoneList;
        return $this;
    }

    /**
     * Get milestoneList
     *
     * @return BillingScheduleMilestoneList
     */
    public function getMilestoneList() {
        return $this->milestoneList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return BillingSchedule
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return BillingSchedule
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}