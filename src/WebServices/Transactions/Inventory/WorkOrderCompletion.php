<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * WorkOrderCompletion
 */
class WorkOrderCompletion extends Record {

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
     * @var string
     */
    protected $tranId;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var float
     */
    protected $scrapQuantity;

    /**
     * @access public
     * @var RecordRef
     */
    public $units;

    /**
     * @access public
     * @var boolean
     */
    protected $isBackflush;

    /**
     * @access public
     * @var float
     */
    protected $orderQuantity;

    /**
     * @access public
     * @var float
     */
    protected $total;

    /**
     * @access public
     * @var RecordRef
     */
    public $createdFrom;

    /**
     * @access public
     * @var InventoryDetail
     */
    protected $inventoryDetail;

    /**
     * @access public
     * @var dateTime
     */
    protected $tranDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $postingPeriod;

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
     * @var RecordRef
     */
    public $revision;

    /**
     * @access public
     * @var RecordRef
     */
    public $startOperation;

    /**
     * @access public
     * @var RecordRef
     */
    public $endOperation;

    /**
     * @access public
     * @var float
     */
    protected $completedQuantity;

    /**
     * @access public
     * @var RecordRef
     */
    public $manufacturingRouting;

    /**
     * @access public
     * @var WorkOrderCompletionComponentList
     */
    protected $componentList;

    /**
     * @access public
     * @var WorkOrderCompletionOperationList
     */
    protected $operationList;

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
    	"tranId" => "string",
    	"item" => "RecordRef",
    	"quantity" => "float",
    	"scrapQuantity" => "float",
    	"units" => "RecordRef",
    	"isBackflush" => "boolean",
    	"orderQuantity" => "float",
    	"total" => "float",
    	"createdFrom" => "RecordRef",
    	"inventoryDetail" => "InventoryDetail",
    	"tranDate" => "dateTime",
    	"postingPeriod" => "RecordRef",
    	"memo" => "string",
    	"subsidiary" => "RecordRef",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"revision" => "RecordRef",
    	"startOperation" => "RecordRef",
    	"endOperation" => "RecordRef",
    	"completedQuantity" => "float",
    	"manufacturingRouting" => "RecordRef",
    	"componentList" => "WorkOrderCompletionComponentList",
    	"operationList" => "WorkOrderCompletionOperationList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return WorkOrderCompletion
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
     * @return WorkOrderCompletion
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
     * Set tranId
     *
     * @param string $tranId
     * @return WorkOrderCompletion
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
     * Set quantity
     *
     * @param float $quantity
     * @return WorkOrderCompletion
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
     * Set scrapQuantity
     *
     * @param float $scrapQuantity
     * @return WorkOrderCompletion
     */
    public function setScrapQuantity($scrapQuantity) {
        $this->scrapQuantity = $scrapQuantity;
        return $this;
    }

    /**
     * Get scrapQuantity
     *
     * @return float
     */
    public function getScrapQuantity() {
        return $this->scrapQuantity;
    }


    /**
     * Set isBackflush
     *
     * @param boolean $isBackflush
     * @return WorkOrderCompletion
     */
    public function setIsBackflush($isBackflush) {
        $this->isBackflush = $isBackflush;
        return $this;
    }

    /**
     * Get isBackflush
     *
     * @return boolean
     */
    public function getIsBackflush() {
        return $this->isBackflush;
    }


    /**
     * Set orderQuantity
     *
     * @param float $orderQuantity
     * @return WorkOrderCompletion
     */
    public function setOrderQuantity($orderQuantity) {
        $this->orderQuantity = $orderQuantity;
        return $this;
    }

    /**
     * Get orderQuantity
     *
     * @return float
     */
    public function getOrderQuantity() {
        return $this->orderQuantity;
    }


    /**
     * Set total
     *
     * @param float $total
     * @return WorkOrderCompletion
     */
    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }

    /**
     * Get total
     *
     * @return float
     */
    public function getTotal() {
        return $this->total;
    }


    /**
     * Set inventoryDetail
     *
     * @param InventoryDetail $inventoryDetail
     * @return WorkOrderCompletion
     */
    public function setInventoryDetail(InventoryDetail $inventoryDetail) {
        $this->inventoryDetail = $inventoryDetail;
        return $this;
    }

    /**
     * Get inventoryDetail
     *
     * @return InventoryDetail
     */
    public function getInventoryDetail() {
        return $this->inventoryDetail;
    }


    /**
     * Set tranDate
     *
     * @param \DateTime $tranDate
     * @return WorkOrderCompletion
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
     * Set memo
     *
     * @param string $memo
     * @return WorkOrderCompletion
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
     * Set completedQuantity
     *
     * @param float $completedQuantity
     * @return WorkOrderCompletion
     */
    public function setCompletedQuantity($completedQuantity) {
        $this->completedQuantity = $completedQuantity;
        return $this;
    }

    /**
     * Get completedQuantity
     *
     * @return float
     */
    public function getCompletedQuantity() {
        return $this->completedQuantity;
    }


    /**
     * Set componentList
     *
     * @param WorkOrderCompletionComponentList $componentList
     * @return WorkOrderCompletion
     */
    public function setComponentList(WorkOrderCompletionComponentList $componentList) {
        $this->componentList = $componentList;
        return $this;
    }

    /**
     * Get componentList
     *
     * @return WorkOrderCompletionComponentList
     */
    public function getComponentList() {
        return $this->componentList;
    }


    /**
     * Set operationList
     *
     * @param WorkOrderCompletionOperationList $operationList
     * @return WorkOrderCompletion
     */
    public function setOperationList(WorkOrderCompletionOperationList $operationList) {
        $this->operationList = $operationList;
        return $this;
    }

    /**
     * Get operationList
     *
     * @return WorkOrderCompletionOperationList
     */
    public function getOperationList() {
        return $this->operationList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return WorkOrderCompletion
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
     * @return WorkOrderCompletion
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
     * @return WorkOrderCompletion
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