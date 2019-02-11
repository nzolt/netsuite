<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Inventory;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;
use Nzolt\NetSuite\WebServices\Transactions\Inventory\Types\WorkOrderItemItemCommitInventory;
use Nzolt\NetSuite\WebServices\Transactions\Inventory\Types\WorkOrderItemItemCreatePo;

/**
 * WorkOrderItem
 */
class WorkOrderItem {

    /**
     * @access public
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var integer
     */
    protected $operationSequenceNumber;

    /**
     * @access public
     * @var float
     */
    protected $componentYield;

    /**
     * @access public
     * @var float
     */
    protected $bomQuantity;

    /**
     * @access public
     * @var float
     */
    protected $quantityCommitted;

    /**
     * @access public
     * @var float
     */
    protected $quantityBackOrdered;

    /**
     * @access public
     * @var float
     */
    protected $quantityAvailable;

    /**
     * @access public
     * @var float
     */
    protected $averageCost;

    /**
     * @access public
     * @var float
     */
    protected $lastPurchasePrice;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnHand;

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
     * @var InventoryDetail
     */
    protected $inventoryDetail;

    /**
     * @access public
     * @var string
     */
    protected $serialNumbers;

    /**
     * @access public
     * @var float
     */
    protected $orderPriority;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $options;

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
    public $poVendor;

    /**
     * @access public
     * @var float
     */
    protected $poRate;

    /**
     * @access public
     * @var float
     */
    protected $percentComplete;

    /**
     * @access public
     * @var float
     */
    protected $contribution;

    /**
     * @access public
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var WorkOrderItemItemCommitInventory
     */
    protected $commit;

    /**
     * @access public
     * @var WorkOrderItemItemCreatePo
     */
    protected $createPo;

    /**
     * @access public
     * @var boolean
     */
    protected $createWo;

    /**
     * @access public
     * @var dateTime
     */
    protected $plannedIssueDate;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"line" => "integer",
    	"item" => "RecordRef",
    	"operationSequenceNumber" => "integer",
    	"componentYield" => "float",
    	"bomQuantity" => "float",
    	"quantityCommitted" => "float",
    	"quantityBackOrdered" => "float",
    	"quantityAvailable" => "float",
    	"averageCost" => "float",
    	"lastPurchasePrice" => "float",
    	"quantityOnHand" => "float",
    	"quantity" => "float",
    	"units" => "RecordRef",
    	"inventoryDetail" => "InventoryDetail",
    	"serialNumbers" => "string",
    	"orderPriority" => "float",
    	"options" => "CustomFieldList",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"poVendor" => "RecordRef",
    	"poRate" => "float",
    	"percentComplete" => "float",
    	"contribution" => "float",
    	"description" => "string",
    	"commit" => "WorkOrderItemItemCommitInventory",
    	"createPo" => "WorkOrderItemItemCreatePo",
    	"createWo" => "boolean",
    	"plannedIssueDate" => "dateTime",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set line
     *
     * @param integer $line
     * @return WorkOrderItem
     */
    public function setLine($line) {
        $this->line = $line;
        return $this;
    }

    /**
     * Get line
     *
     * @return integer
     */
    public function getLine() {
        return $this->line;
    }


    /**
     * Set operationSequenceNumber
     *
     * @param integer $operationSequenceNumber
     * @return WorkOrderItem
     */
    public function setOperationSequenceNumber($operationSequenceNumber) {
        $this->operationSequenceNumber = $operationSequenceNumber;
        return $this;
    }

    /**
     * Get operationSequenceNumber
     *
     * @return integer
     */
    public function getOperationSequenceNumber() {
        return $this->operationSequenceNumber;
    }


    /**
     * Set componentYield
     *
     * @param float $componentYield
     * @return WorkOrderItem
     */
    public function setComponentYield($componentYield) {
        $this->componentYield = $componentYield;
        return $this;
    }

    /**
     * Get componentYield
     *
     * @return float
     */
    public function getComponentYield() {
        return $this->componentYield;
    }


    /**
     * Set bomQuantity
     *
     * @param float $bomQuantity
     * @return WorkOrderItem
     */
    public function setBomQuantity($bomQuantity) {
        $this->bomQuantity = $bomQuantity;
        return $this;
    }

    /**
     * Get bomQuantity
     *
     * @return float
     */
    public function getBomQuantity() {
        return $this->bomQuantity;
    }


    /**
     * Set quantityCommitted
     *
     * @param float $quantityCommitted
     * @return WorkOrderItem
     */
    public function setQuantityCommitted($quantityCommitted) {
        $this->quantityCommitted = $quantityCommitted;
        return $this;
    }

    /**
     * Get quantityCommitted
     *
     * @return float
     */
    public function getQuantityCommitted() {
        return $this->quantityCommitted;
    }


    /**
     * Set quantityBackOrdered
     *
     * @param float $quantityBackOrdered
     * @return WorkOrderItem
     */
    public function setQuantityBackOrdered($quantityBackOrdered) {
        $this->quantityBackOrdered = $quantityBackOrdered;
        return $this;
    }

    /**
     * Get quantityBackOrdered
     *
     * @return float
     */
    public function getQuantityBackOrdered() {
        return $this->quantityBackOrdered;
    }


    /**
     * Set quantityAvailable
     *
     * @param float $quantityAvailable
     * @return WorkOrderItem
     */
    public function setQuantityAvailable($quantityAvailable) {
        $this->quantityAvailable = $quantityAvailable;
        return $this;
    }

    /**
     * Get quantityAvailable
     *
     * @return float
     */
    public function getQuantityAvailable() {
        return $this->quantityAvailable;
    }


    /**
     * Set averageCost
     *
     * @param float $averageCost
     * @return WorkOrderItem
     */
    public function setAverageCost($averageCost) {
        $this->averageCost = $averageCost;
        return $this;
    }

    /**
     * Get averageCost
     *
     * @return float
     */
    public function getAverageCost() {
        return $this->averageCost;
    }


    /**
     * Set lastPurchasePrice
     *
     * @param float $lastPurchasePrice
     * @return WorkOrderItem
     */
    public function setLastPurchasePrice($lastPurchasePrice) {
        $this->lastPurchasePrice = $lastPurchasePrice;
        return $this;
    }

    /**
     * Get lastPurchasePrice
     *
     * @return float
     */
    public function getLastPurchasePrice() {
        return $this->lastPurchasePrice;
    }


    /**
     * Set quantityOnHand
     *
     * @param float $quantityOnHand
     * @return WorkOrderItem
     */
    public function setQuantityOnHand($quantityOnHand) {
        $this->quantityOnHand = $quantityOnHand;
        return $this;
    }

    /**
     * Get quantityOnHand
     *
     * @return float
     */
    public function getQuantityOnHand() {
        return $this->quantityOnHand;
    }


    /**
     * Set quantity
     *
     * @param float $quantity
     * @return WorkOrderItem
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
     * Set inventoryDetail
     *
     * @param InventoryDetail $inventoryDetail
     * @return WorkOrderItem
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
     * Set serialNumbers
     *
     * @param string $serialNumbers
     * @return WorkOrderItem
     */
    public function setSerialNumbers($serialNumbers) {
        $this->serialNumbers = $serialNumbers;
        return $this;
    }

    /**
     * Get serialNumbers
     *
     * @return string
     */
    public function getSerialNumbers() {
        return $this->serialNumbers;
    }


    /**
     * Set orderPriority
     *
     * @param float $orderPriority
     * @return WorkOrderItem
     */
    public function setOrderPriority($orderPriority) {
        $this->orderPriority = $orderPriority;
        return $this;
    }

    /**
     * Get orderPriority
     *
     * @return float
     */
    public function getOrderPriority() {
        return $this->orderPriority;
    }


    /**
     * Set options
     *
     * @param CustomFieldList $options
     * @return WorkOrderItem
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
     * Set poRate
     *
     * @param float $poRate
     * @return WorkOrderItem
     */
    public function setPoRate($poRate) {
        $this->poRate = $poRate;
        return $this;
    }

    /**
     * Get poRate
     *
     * @return float
     */
    public function getPoRate() {
        return $this->poRate;
    }


    /**
     * Set percentComplete
     *
     * @param float $percentComplete
     * @return WorkOrderItem
     */
    public function setPercentComplete($percentComplete) {
        $this->percentComplete = $percentComplete;
        return $this;
    }

    /**
     * Get percentComplete
     *
     * @return float
     */
    public function getPercentComplete() {
        return $this->percentComplete;
    }


    /**
     * Set contribution
     *
     * @param float $contribution
     * @return WorkOrderItem
     */
    public function setContribution($contribution) {
        $this->contribution = $contribution;
        return $this;
    }

    /**
     * Get contribution
     *
     * @return float
     */
    public function getContribution() {
        return $this->contribution;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return WorkOrderItem
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }


    /**
     * Set commit
     *
     * @param WorkOrderItemItemCommitInventory $commit
     * @return WorkOrderItem
     */
    public function setCommit(WorkOrderItemItemCommitInventory $commit) {
        $this->commit = $commit;
        return $this;
    }

    /**
     * Get commit
     *
     * @return WorkOrderItemItemCommitInventory
     */
    public function getCommit() {
        return $this->commit;
    }


    /**
     * Set createPo
     *
     * @param WorkOrderItemItemCreatePo $createPo
     * @return WorkOrderItem
     */
    public function setCreatePo(WorkOrderItemItemCreatePo $createPo) {
        $this->createPo = $createPo;
        return $this;
    }

    /**
     * Get createPo
     *
     * @return WorkOrderItemItemCreatePo
     */
    public function getCreatePo() {
        return $this->createPo;
    }


    /**
     * Set createWo
     *
     * @param boolean $createWo
     * @return WorkOrderItem
     */
    public function setCreateWo($createWo) {
        $this->createWo = $createWo;
        return $this;
    }

    /**
     * Get createWo
     *
     * @return boolean
     */
    public function getCreateWo() {
        return $this->createWo;
    }


    /**
     * Set plannedIssueDate
     *
     * @param \DateTime $plannedIssueDate
     * @return WorkOrderItem
     */
    public function setPlannedIssueDate(\DateTime $plannedIssueDate) {
        $this->plannedIssueDate = $plannedIssueDate->format('c');
        return $this;
    }

    /**
     * Get plannedIssueDate
     *
     * @return \DateTime
     */
    public function getPlannedIssueDate() {
        return new \DateTime($this->plannedIssueDate);
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return WorkOrderItem
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

}