<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Common\Types\TimeItemTimeType;
use Nzolt\NetSuite\WebServices\Platform\Core\Duration;

/**
 * TimeItem
 */
class TimeItem {

    /**
     * @access public
     * @var integer
     */
    protected $id;

    /**
     * @access public
     * @var RecordRef
     */
    public $employee;

    /**
     * @access public
     * @var TimeItemTimeType
     */
    protected $timeType;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $customer;

    /**
     * @access public
     * @var boolean
     */
    protected $isBillable;

    /**
     * @access public
     * @var RecordRef
     */
    public $payrollItem;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var RecordRef
     */
    public $temporaryLocalJurisdiction;

    /**
     * @access public
     * @var RecordRef
     */
    public $temporaryStateJurisdiction;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var RecordRef
     */
    public $class;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var Duration
     */
    protected $hours;

    /**
     * @access public
     * @var RecordRef
     */
    public $price;

    /**
     * @access public
     * @var float
     */
    protected $rate;

    /**
     * @access public
     * @var boolean
     */
    protected $overrideRate;

    /**
     * @access public
     * @var Duration
     */
    protected $hoursTotal;

    /**
     * @access public
     * @var RecordRef
     */
    public $caseTaskEvent;

    /**
     * @access public
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var boolean
     */
    protected $isUtilized;

    /**
     * @access public
     * @var boolean
     */
    protected $isProductive;

    /**
     * @access public
     * @var boolean
     */
    protected $isExempt;

    static $paramtypesmap = array(
    	"id" => "integer",
    	"employee" => "RecordRef",
    	"timeType" => "TimeItemTimeType",
    	"tranDate" => "dateTime",
    	"customer" => "RecordRef",
    	"isBillable" => "boolean",
    	"payrollItem" => "RecordRef",
    	"item" => "RecordRef",
    	"temporaryLocalJurisdiction" => "RecordRef",
    	"temporaryStateJurisdiction" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"hours" => "Duration",
    	"price" => "RecordRef",
    	"rate" => "float",
    	"overrideRate" => "boolean",
    	"hoursTotal" => "Duration",
    	"caseTaskEvent" => "RecordRef",
    	"memo" => "string",
    	"isUtilized" => "boolean",
    	"isProductive" => "boolean",
    	"isExempt" => "boolean",
    );

    /**
     * Set id
     *
     * @param integer $id
     * @return TimeItem
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set timeType
     *
     * @param TimeItemTimeType $timeType
     * @return TimeItem
     */
    public function setTimeType(TimeItemTimeType $timeType) {
        $this->timeType = $timeType;
        return $this;
    }

    /**
     * Get timeType
     *
     * @return TimeItemTimeType
     */
    public function getTimeType() {
        return $this->timeType;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return TimeItem
     */
    public function setTranDate(\DateTime $tranDate) {
        $this->tranDate = $tranDate->format('c');
        return $this;
    }

    /**
     * Get tranDate
     *
     * @return \DateTime
     */
    public function getTranDate() {
        return new \DateTime($this->tranDate);
    }


    /**
     * Set isBillable
     *
     * @param boolean $isBillable
     * @return TimeItem
     */
    public function setIsBillable($isBillable) {
        $this->isBillable = $isBillable;
        return $this;
    }

    /**
     * Get isBillable
     *
     * @return boolean
     */
    public function getIsBillable() {
        return $this->isBillable;
    }


    /**
     * Set hours
     *
     * @param Duration $hours
     * @return TimeItem
     */
    public function setHours(Duration $hours) {
        $this->hours = $hours;
        return $this;
    }

    /**
     * Get hours
     *
     * @return Duration
     */
    public function getHours() {
        return $this->hours;
    }


    /**
     * Set rate
     *
     * @param float $rate
     * @return TimeItem
     */
    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return float
     */
    public function getRate() {
        return $this->rate;
    }


    /**
     * Set overrideRate
     *
     * @param boolean $overrideRate
     * @return TimeItem
     */
    public function setOverrideRate($overrideRate) {
        $this->overrideRate = $overrideRate;
        return $this;
    }

    /**
     * Get overrideRate
     *
     * @return boolean
     */
    public function getOverrideRate() {
        return $this->overrideRate;
    }


    /**
     * Set hoursTotal
     *
     * @param Duration $hoursTotal
     * @return TimeItem
     */
    public function setHoursTotal(Duration $hoursTotal) {
        $this->hoursTotal = $hoursTotal;
        return $this;
    }

    /**
     * Get hoursTotal
     *
     * @return Duration
     */
    public function getHoursTotal() {
        return $this->hoursTotal;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return TimeItem
     */
    public function setMemo($memo) {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Get memo
     *
     * @return string
     */
    public function getMemo() {
        return $this->memo;
    }


    /**
     * Set isUtilized
     *
     * @param boolean $isUtilized
     * @return TimeItem
     */
    public function setIsUtilized($isUtilized) {
        $this->isUtilized = $isUtilized;
        return $this;
    }

    /**
     * Get isUtilized
     *
     * @return boolean
     */
    public function getIsUtilized() {
        return $this->isUtilized;
    }


    /**
     * Set isProductive
     *
     * @param boolean $isProductive
     * @return TimeItem
     */
    public function setIsProductive($isProductive) {
        $this->isProductive = $isProductive;
        return $this;
    }

    /**
     * Get isProductive
     *
     * @return boolean
     */
    public function getIsProductive() {
        return $this->isProductive;
    }


    /**
     * Set isExempt
     *
     * @param boolean $isExempt
     * @return TimeItem
     */
    public function setIsExempt($isExempt) {
        $this->isExempt = $isExempt;
        return $this;
    }

    /**
     * Get isExempt
     *
     * @return boolean
     */
    public function getIsExempt() {
        return $this->isExempt;
    }

}