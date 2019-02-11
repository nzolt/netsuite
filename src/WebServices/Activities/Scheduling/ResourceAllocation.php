<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Activities\Scheduling;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\ResourceAllocationApprovalStatus;
use Nzolt\NetSuite\WebServices\Activities\Scheduling\Types\ResourceAllocationAllocationUnit;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * ResourceAllocation
 */
class ResourceAllocation extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $requestedby;

    /**
     * @access public
     * @var ResourceAllocationApprovalStatus
     */
    protected $approvalStatus;

    /**
     * @access public
     * @var RecordRef
     */
    public $nextApprover;

    /**
     * @access public
     * @var RecordRef
     */
    public $allocationResource;

    /**
     * @access public
     * @var RecordRef
     */
    public $project;

    /**
     * @access public
     * @var string
     */
    protected $notes;

    /**
     * @access public
     * @var dateTime
     */
    protected $startDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $endDate;

    /**
     * @access public
     * @var float
     */
    protected $allocationAmount;

    /**
     * @access public
     * @var ResourceAllocationAllocationUnit
     */
    protected $allocationUnit;

    /**
     * @access public
     * @var float
     */
    protected $numberHours;

    /**
     * @access public
     * @var float
     */
    protected $percentOfTime;

    /**
     * @access public
     * @var RecordRef
     */
    public $allocationType;

    /**
     * @access public
     * @var RecordRef
     */
    public $customForm;

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
    	"requestedby" => "RecordRef",
    	"approvalStatus" => "ResourceAllocationApprovalStatus",
    	"nextApprover" => "RecordRef",
    	"allocationResource" => "RecordRef",
    	"project" => "RecordRef",
    	"notes" => "string",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"allocationAmount" => "float",
    	"allocationUnit" => "ResourceAllocationAllocationUnit",
    	"numberHours" => "float",
    	"percentOfTime" => "float",
    	"allocationType" => "RecordRef",
    	"customForm" => "RecordRef",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set approvalStatus
     *
     * @param ResourceAllocationApprovalStatus $approvalStatus
     * @return ResourceAllocation
     */
    public function setApprovalStatus(ResourceAllocationApprovalStatus $approvalStatus) {
        $this->approvalStatus = $approvalStatus;
        return $this;
    }

    /**
     * Get approvalStatus
     *
     * @return ResourceAllocationApprovalStatus
     */
    public function getApprovalStatus() {
        return $this->approvalStatus;
    }


    /**
     * Set notes
     *
     * @param string $notes
     * @return ResourceAllocation
     */
    public function setNotes($notes) {
        $this->notes = $notes;
        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes() {
        return $this->notes;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return ResourceAllocation
     */
    public function setStartDate(\DateTime $startDate) {
        $this->startDate = $startDate->format('c');
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate() {
        return new \DateTime($this->startDate);
    }


    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return ResourceAllocation
     */
    public function setEndDate(\DateTime $endDate) {
        $this->endDate = $endDate->format('c');
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate() {
        return new \DateTime($this->endDate);
    }


    /**
     * Set allocationAmount
     *
     * @param float $allocationAmount
     * @return ResourceAllocation
     */
    public function setAllocationAmount($allocationAmount) {
        $this->allocationAmount = $allocationAmount;
        return $this;
    }

    /**
     * Get allocationAmount
     *
     * @return float
     */
    public function getAllocationAmount() {
        return $this->allocationAmount;
    }


    /**
     * Set allocationUnit
     *
     * @param ResourceAllocationAllocationUnit $allocationUnit
     * @return ResourceAllocation
     */
    public function setAllocationUnit(ResourceAllocationAllocationUnit $allocationUnit) {
        $this->allocationUnit = $allocationUnit;
        return $this;
    }

    /**
     * Get allocationUnit
     *
     * @return ResourceAllocationAllocationUnit
     */
    public function getAllocationUnit() {
        return $this->allocationUnit;
    }


    /**
     * Set numberHours
     *
     * @param float $numberHours
     * @return ResourceAllocation
     */
    public function setNumberHours($numberHours) {
        $this->numberHours = $numberHours;
        return $this;
    }

    /**
     * Get numberHours
     *
     * @return float
     */
    public function getNumberHours() {
        return $this->numberHours;
    }


    /**
     * Set percentOfTime
     *
     * @param float $percentOfTime
     * @return ResourceAllocation
     */
    public function setPercentOfTime($percentOfTime) {
        $this->percentOfTime = $percentOfTime;
        return $this;
    }

    /**
     * Get percentOfTime
     *
     * @return float
     */
    public function getPercentOfTime() {
        return $this->percentOfTime;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return ResourceAllocation
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
     * @return ResourceAllocation
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
     * @return ResourceAllocation
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