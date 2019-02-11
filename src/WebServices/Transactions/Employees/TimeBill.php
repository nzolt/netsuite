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
 * TimeBill
 */
class TimeBill extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $employee;

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
     * @var RecordRef
     */
    public $caseTaskEvent;

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
    public $workplace;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

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
     * @var TimeBillTimeType
     */
    protected $timeType;

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
     * @var string
     */
    protected $memo;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

    /**
     * @access public
     * @var boolean
     */
    protected $supervisorApproval;

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
     * @var string
     */
    protected $status;

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
    	"customForm" => "RecordRef",
    	"employee" => "RecordRef",
    	"tranDate" => "dateTime",
    	"customer" => "RecordRef",
    	"caseTaskEvent" => "RecordRef",
    	"isBillable" => "boolean",
    	"payrollItem" => "RecordRef",
    	"paidExternally" => "boolean",
    	"workplace" => "RecordRef",
    	"item" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"hours" => "Duration",
    	"price" => "RecordRef",
    	"timeType" => "TimeBillTimeType",
    	"rate" => "float",
    	"overrideRate" => "boolean",
    	"temporaryLocalJurisdiction" => "RecordRef",
    	"temporaryStateJurisdiction" => "RecordRef",
    	"memo" => "string",
    	"subsidiary" => "RecordRef",
    	"supervisorApproval" => "boolean",
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"status" => "string",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return TimeBill
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
     * @return TimeBill
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
     * @return TimeBill
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
     * Set hours
     *
     * @param Duration $hours
     * @return TimeBill
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
     * Set timeType
     *
     * @param string $timeType
     * @return TimeBill
     */
    public function setTimeType($timeType) {
        $this->timeType = $timeType;
        return $this;
    }

    /**
     * Get timeType
     *
     * @return string
     */
    public function getTimeType() {
        return $this->timeType;
    }


    /**
     * Set rate
     *
     * @param float $rate
     * @return TimeBill
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
     * @return TimeBill
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
     * @return TimeBill
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
     * Set supervisorApproval
     *
     * @param boolean $supervisorApproval
     * @return TimeBill
     */
    public function setSupervisorApproval($supervisorApproval) {
        $this->supervisorApproval = $supervisorApproval;
        return $this;
    }

    /**
     * Get supervisorApproval
     *
     * @return boolean
     */
    public function getSupervisorApproval() {
        return $this->supervisorApproval;
    }


    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return TimeBill
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
     * @return TimeBill
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
     * Set status
     *
     * @param string $status
     * @return TimeBill
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return TimeBill
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
     * @return TimeBill
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
     * @return TimeBill
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