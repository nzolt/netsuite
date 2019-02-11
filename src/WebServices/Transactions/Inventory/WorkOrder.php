<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Transactions\Inventory\Types\WorkOrderOrderStatus;
use Nzolt\NetSuite\WebServices\Transactions\Inventory\Types\WorkOrderSchedulingMethod;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * WorkOrder
 */
class WorkOrder extends Record {

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
    public $customForm;

    /**
     * @access public
     * @var RecordRef
     */
    public $manufacturingRouting;

    /**
     * @access public
     * @var boolean
     */
    protected $autoCalculateLag;

    /**
     * @access public
     * @var string
     */
    protected $status;

    /**
     * @access public
     * @var string
     */
    protected $tranId;

    /**
     * @access public
     * @var RecordRef
     */
    public $entity;

    /**
     * @access public
     * @var RecordRef
     */
    public $job;

    /**
     * @access public
     * @var RecordRef
     */
    public $assemblyItem;

    /**
     * @access public
     * @var boolean
     */
    protected $expandAssembly;

    /**
     * @access public
     * @var boolean
     */
    protected $isWip;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var RecordRef
     */
    public $units;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var WorkOrderOrderStatus
     */
    protected $orderStatus;

    /**
     * @access public
     * @var boolean
     */
    protected $firmed;

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
     * @var WorkOrderItemList
     */
    protected $itemList;

    /**
     * @access public
     * @var RecordRef
     */
    public $location;

    /**
     * @access public
     * @var WorkOrderSchedulingMethod
     */
    protected $schedulingMethod;

    /**
     * @access public
     * @var SalesTeamList
     */
    protected $salesTeamList;

    /**
     * @access public
     * @var PartnersList
     */
    protected $partnersList;

    /**
     * @access public
     * @var RecordRef
     */
    public $createdFrom;

    /**
     * @access public
     * @var string
     */
    protected $sourceTransactionId;

    /**
     * @access public
     * @var integer
     */
    protected $sourceTransactionLine;

    /**
     * @access public
     * @var boolean
     */
    protected $specialOrder;

    /**
     * @access public
     * @var float
     */
    protected $buildable;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $options;

    /**
     * @access public
     * @var float
     */
    protected $built;

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
     * @var RecordRef
     */
    public $revision;

    /**
     * @access public
     * @var RecordRef
     */
    public $subsidiary;

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
    	"createdDate" => "dateTime",
    	"lastModifiedDate" => "dateTime",
    	"customForm" => "RecordRef",
    	"manufacturingRouting" => "RecordRef",
    	"autoCalculateLag" => "boolean",
    	"status" => "string",
    	"tranId" => "string",
    	"entity" => "RecordRef",
    	"job" => "RecordRef",
    	"assemblyItem" => "RecordRef",
    	"expandAssembly" => "boolean",
    	"isWip" => "boolean",
    	"quantity" => "float",
    	"units" => "RecordRef",
    	"tranDate" => "dateTime",
    	"orderStatus" => "WorkOrderOrderStatus",
    	"firmed" => "boolean",
    	"memo" => "string",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"itemList" => "WorkOrderItemList",
    	"location" => "RecordRef",
    	"schedulingMethod" => "WorkOrderSchedulingMethod",
    	"salesTeamList" => "SalesTeamList",
    	"partnersList" => "PartnersList",
    	"createdFrom" => "RecordRef",
    	"sourceTransactionId" => "string",
    	"sourceTransactionLine" => "integer",
    	"specialOrder" => "boolean",
    	"buildable" => "float",
    	"options" => "CustomFieldList",
    	"built" => "float",
    	"startDate" => "dateTime",
    	"endDate" => "dateTime",
    	"revision" => "RecordRef",
    	"subsidiary" => "RecordRef",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return WorkOrder
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
     * @return WorkOrder
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
     * Set autoCalculateLag
     *
     * @param boolean $autoCalculateLag
     * @return WorkOrder
     */
    public function setAutoCalculateLag($autoCalculateLag) {
        $this->autoCalculateLag = $autoCalculateLag;
        return $this;
    }

    /**
     * Get autoCalculateLag
     *
     * @return boolean
     */
    public function getAutoCalculateLag() {
        return $this->autoCalculateLag;
    }


    /**
     * Set status
     *
     * @param string $status
     * @return WorkOrder
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
     * Set tranId
     *
     * @param string $tranId
     * @return WorkOrder
     */
    public function setTranId($tranId) {
        $this->tranId = $tranId;
        return $this;
    }

    /**
     * Get tranId
     *
     * @return string
     */
    public function getTranId() {
        return $this->tranId;
    }


    /**
     * Set expandAssembly
     *
     * @param boolean $expandAssembly
     * @return WorkOrder
     */
    public function setExpandAssembly($expandAssembly) {
        $this->expandAssembly = $expandAssembly;
        return $this;
    }

    /**
     * Get expandAssembly
     *
     * @return boolean
     */
    public function getExpandAssembly() {
        return $this->expandAssembly;
    }


    /**
     * Set isWip
     *
     * @param boolean $isWip
     * @return WorkOrder
     */
    public function setIsWip($isWip) {
        $this->isWip = $isWip;
        return $this;
    }

    /**
     * Get isWip
     *
     * @return boolean
     */
    public function getIsWip() {
        return $this->isWip;
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return WorkOrder
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity() {
        return $this->quantity;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return WorkOrder
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
     * Set orderStatus
     *
     * @param WorkOrderOrderStatus $orderStatus
     * @return WorkOrder
     */
    public function setOrderStatus(WorkOrderOrderStatus $orderStatus) {
        $this->orderStatus = $orderStatus;
        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return WorkOrderOrderStatus
     */
    public function getOrderStatus() {
        return $this->orderStatus;
    }


    /**
     * Set firmed
     *
     * @param boolean $firmed
     * @return WorkOrder
     */
    public function setFirmed($firmed) {
        $this->firmed = $firmed;
        return $this;
    }

    /**
     * Get firmed
     *
     * @return boolean
     */
    public function getFirmed() {
        return $this->firmed;
    }


    /**
     * Set memo
     *
     * @param string $memo
     * @return WorkOrder
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
     * Set itemList
     *
     * @param WorkOrderItemList $itemList
     * @return WorkOrder
     */
    public function setItemList(WorkOrderItemList $itemList) {
        $this->itemList = $itemList;
        return $this;
    }

    /**
     * Get itemList
     *
     * @return WorkOrderItemList
     */
    public function getItemList() {
        return $this->itemList;
    }


    /**
     * Set schedulingMethod
     *
     * @param WorkOrderSchedulingMethod $schedulingMethod
     * @return WorkOrder
     */
    public function setSchedulingMethod(WorkOrderSchedulingMethod $schedulingMethod) {
        $this->schedulingMethod = $schedulingMethod;
        return $this;
    }

    /**
     * Get schedulingMethod
     *
     * @return WorkOrderSchedulingMethod
     */
    public function getSchedulingMethod() {
        return $this->schedulingMethod;
    }


    /**
     * Set salesTeamList
     *
     * @param SalesTeamList $salesTeamList
     * @return WorkOrder
     */
    public function setSalesTeamList(SalesTeamList $salesTeamList) {
        $this->salesTeamList = $salesTeamList;
        return $this;
    }

    /**
     * Get salesTeamList
     *
     * @return SalesTeamList
     */
    public function getSalesTeamList() {
        return $this->salesTeamList;
    }


    /**
     * Set partnersList
     *
     * @param PartnersList $partnersList
     * @return WorkOrder
     */
    public function setPartnersList(PartnersList $partnersList) {
        $this->partnersList = $partnersList;
        return $this;
    }

    /**
     * Get partnersList
     *
     * @return PartnersList
     */
    public function getPartnersList() {
        return $this->partnersList;
    }


    /**
     * Set sourceTransactionId
     *
     * @param string $sourceTransactionId
     * @return WorkOrder
     */
    public function setSourceTransactionId($sourceTransactionId) {
        $this->sourceTransactionId = $sourceTransactionId;
        return $this;
    }

    /**
     * Get sourceTransactionId
     *
     * @return string
     */
    public function getSourceTransactionId() {
        return $this->sourceTransactionId;
    }


    /**
     * Set sourceTransactionLine
     *
     * @param integer $sourceTransactionLine
     * @return WorkOrder
     */
    public function setSourceTransactionLine($sourceTransactionLine) {
        $this->sourceTransactionLine = $sourceTransactionLine;
        return $this;
    }

    /**
     * Get sourceTransactionLine
     *
     * @return integer
     */
    public function getSourceTransactionLine() {
        return $this->sourceTransactionLine;
    }


    /**
     * Set specialOrder
     *
     * @param boolean $specialOrder
     * @return WorkOrder
     */
    public function setSpecialOrder($specialOrder) {
        $this->specialOrder = $specialOrder;
        return $this;
    }

    /**
     * Get specialOrder
     *
     * @return boolean
     */
    public function getSpecialOrder() {
        return $this->specialOrder;
    }


    /**
     * Set buildable
     *
     * @param float $buildable
     * @return WorkOrder
     */
    public function setBuildable($buildable) {
        $this->buildable = $buildable;
        return $this;
    }

    /**
     * Get buildable
     *
     * @return float
     */
    public function getBuildable() {
        return $this->buildable;
    }


    /**
     * Set options
     *
     * @param CustomFieldList $options
     * @return WorkOrder
     */
    public function setOptions(CustomFieldList $options) {
        $this->options = $options;
        return $this;
    }

    /**
     * Get options
     *
     * @return CustomFieldList
     */
    public function getOptions() {
        return $this->options;
    }


    /**
     * Set built
     *
     * @param float $built
     * @return WorkOrder
     */
    public function setBuilt($built) {
        $this->built = $built;
        return $this;
    }

    /**
     * Get built
     *
     * @return float
     */
    public function getBuilt() {
        return $this->built;
    }


    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return WorkOrder
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
     * @return WorkOrder
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
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return WorkOrder
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
     * @return WorkOrder
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
     * @return WorkOrder
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