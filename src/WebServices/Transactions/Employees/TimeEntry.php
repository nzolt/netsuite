<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Employees;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\Duration;
use Nzolt\NetSuite\WebServices\Transactions\Employees\Types\TimeBillTimeType;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * TimeEntry
 */
class TimeEntry extends Record {

    /**
     * @access public
     * @var Duration
     */
    protected $hours;

    /**
     * @access public
     * @var dateTime
     */
    protected $createdDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $customer;

    /**
     * @access public
     * @var RecordRef
     */
    public $caseTaskEvent;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

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
     * @var boolean
     */
    protected $paidExternally;

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
     * @var string
     */
    protected $memo;

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
     * @var string
     */
    protected $billingClass;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var RecordRef
     */
    public $approvalStatus;

    /**
     * @access public
     * @var TimeBillTimeType
     */
    protected $timeType;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

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
    	"hours" => "Duration",
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"customer" => "RecordRef",
    	"caseTaskEvent" => "RecordRef",
    	"item" => "RecordRef",
    	"isBillable" => "boolean",
    	"payrollItem" => "RecordRef",
    	"paidExternally" => "boolean",
    	"price" => "RecordRef",
    	"rate" => "float",
    	"overrideRate" => "boolean",
    	"memo" => "string",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"billingClass" => "string",
    	"subsidiary" => "RecordRef",
    	"approvalStatus" => "RecordRef",
    	"timeType" => "TimeBillTimeType",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set hours
     *
     * @param Duration $hours
     * @return TimeEntry
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
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return TimeEntry
     */
    public function setCreatedDate(\DateTime $createdDate) {
        $this->createdDate = $createdDate->format('c');
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate() {
        return new \DateTime($this->createdDate);
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return TimeEntry
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate->format('c');
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate() {
        return new \DateTime($this->lastModifiedDate);
    }


    /**
     * Set isBillable
     *
     * @param boolean $isBillable
     * @return TimeEntry
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
     * Set paidExternally
     *
     * @param boolean $paidExternally
     * @return TimeEntry
     */
    public function setPaidExternally($paidExternally) {
        $this->paidExternally = $paidExternally;
        return $this;
    }

    /**
     * Get paidExternally
     *
     * @return boolean
     */
    public function getPaidExternally() {
        return $this->paidExternally;
    }


    /**
     * Set rate
     *
     * @param float $rate
     * @return TimeEntry
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
     * @return TimeEntry
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
     * Set memo
     *
     * @param string $memo
     * @return TimeEntry
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
     * Set billingClass
     *
     * @param string $billingClass
     * @return TimeEntry
     */
    public function setBillingClass($billingClass) {
        $this->billingClass = $billingClass;
        return $this;
    }

    /**
     * Get billingClass
     *
     * @return string
     */
    public function getBillingClass() {
        return $this->billingClass;
    }


    /**
     * Set timeType
     *
     * @param TimeBillTimeType $timeType
     * @return TimeEntry
     */
    public function setTimeType(TimeBillTimeType $timeType) {
        $this->timeType = $timeType;
        return $this;
    }

    /**
     * Get timeType
     *
     * @return TimeBillTimeType
     */
    public function getTimeType() {
        return $this->timeType;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return TimeEntry
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return TimeEntry
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
     * @return TimeEntry
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