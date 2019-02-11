<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\SalesOrderItemCommitInventory;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;
use Nzolt\NetSuite\WebServices\Transactions\Sales\Types\SalesOrderItemCreatePo;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\ItemCostEstimateType;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeSopGroup;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeDeferral;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoePermitDiscount;

/**
 * SalesOrderItem
 */
class SalesOrderItem {

    /**
     * @access public
     * @var RecordRef
     */
    public $job;

    /**
     * @access public
     * @var RecordRef
     */
    public $item;

    /**
     * @access public
     * @var float
     */
    protected $quantityAvailable;

    /**
     * @access public
     * @var boolean
     */
    protected $expandItemGroup;

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
    protected $description;

    /**
     * @access public
     * @var RecordRef
     */
    public $price;

    /**
     * @access public
     * @var string
     */
    protected $rate;

    /**
     * @access public
     * @var string
     */
    protected $serialNumbers;

    /**
     * @access public
     * @var float
     */
    protected $amount;

    /**
     * @access public
     * @var boolean
     */
    protected $isTaxable;

    /**
     * @access public
     * @var SalesOrderItemCommitInventory
     */
    protected $commitInventory;

    /**
     * @access public
     * @var float
     */
    protected $orderPriority;

    /**
     * @access public
     * @var string
     */
    protected $licenseCode;

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
     * @var SalesOrderItemCreatePo
     */
    protected $createPo;

    /**
     * @access public
     * @var RecordRef
     */
    public $createdPo;

    /**
     * @access public
     * @var float
     */
    protected $altSalesAmt;

    /**
     * @access public
     * @var boolean
     */
    protected $createWo;

    /**
     * @access public
     * @var RecordRef
     */
    public $poVendor;

    /**
     * @access public
     * @var string
     */
    protected $poCurrency;

    /**
     * @access public
     * @var float
     */
    protected $poRate;

    /**
     * @access public
     * @var RecordRef
     */
    public $revRecSchedule;

    /**
     * @access public
     * @var dateTime
     */
    protected $revRecStartDate;

    /**
     * @access public
     * @var integer
     */
    protected $revRecTermInMonths;

    /**
     * @access public
     * @var dateTime
     */
    protected $revRecEndDate;

    /**
     * @access public
     * @var boolean
     */
    protected $deferRevRec;

    /**
     * @access public
     * @var boolean
     */
    protected $isClosed;

    /**
     * @access public
     * @var RecordRef
     */
    public $catchUpPeriod;

    /**
     * @access public
     * @var RecordRef
     */
    public $billingSchedule;

    /**
     * @access public
     * @var boolean
     */
    protected $fromJob;

    /**
     * @access public
     * @var float
     */
    protected $grossAmt;

    /**
     * @access public
     * @var boolean
     */
    protected $excludeFromRateRequest;

    /**
     * @access public
     * @var boolean
     */
    protected $isEstimate;

    /**
     * @access public
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var float
     */
    protected $percentComplete;

    /**
     * @access public
     * @var ItemCostEstimateType
     */
    protected $costEstimateType;

    /**
     * @access public
     * @var float
     */
    protected $costEstimate;

    /**
     * @access public
     * @var float
     */
    protected $quantityBackOrdered;

    /**
     * @access public
     * @var float
     */
    protected $quantityBilled;

    /**
     * @access public
     * @var float
     */
    protected $quantityCommitted;

    /**
     * @access public
     * @var float
     */
    protected $quantityFulfilled;

    /**
     * @access public
     * @var float
     */
    protected $quantityPacked;

    /**
     * @access public
     * @var float
     */
    protected $quantityPicked;

    /**
     * @access public
     * @var float
     */
    protected $tax1Amt;

    /**
     * @access public
     * @var RecordRef
     */
    public $taxCode;

    /**
     * @access public
     * @var float
     */
    protected $taxRate1;

    /**
     * @access public
     * @var float
     */
    protected $taxRate2;

    /**
     * @access public
     * @var string
     */
    protected $giftCertFrom;

    /**
     * @access public
     * @var string
     */
    protected $giftCertRecipientName;

    /**
     * @access public
     * @var string
     */
    protected $giftCertRecipientEmail;

    /**
     * @access public
     * @var string
     */
    protected $giftCertMessage;

    /**
     * @access public
     * @var string
     */
    protected $giftCertNumber;

    /**
     * @access public
     * @var integer
     */
    protected $shipGroup;

    /**
     * @access public
     * @var boolean
     */
    protected $itemIsFulfilled;

    /**
     * @access public
     * @var RecordRef
     */
    public $shipAddress;

    /**
     * @access public
     * @var RecordRef
     */
    public $shipMethod;

    /**
     * @access public
     * @var VsoeSopGroup
     */
    protected $vsoeSopGroup;

    /**
     * @access public
     * @var boolean
     */
    protected $vsoeIsEstimate;

    /**
     * @access public
     * @var float
     */
    protected $vsoePrice;

    /**
     * @access public
     * @var float
     */
    protected $vsoeAmount;

    /**
     * @access public
     * @var float
     */
    protected $vsoeAllocation;

    /**
     * @access public
     * @var VsoeDeferral
     */
    protected $vsoeDeferral;

    /**
     * @access public
     * @var VsoePermitDiscount
     */
    protected $vsoePermitDiscount;

    /**
     * @access public
     * @var boolean
     */
    protected $vsoeDelivered;

    /**
     * @access public
     * @var dateTime
     */
    protected $expectedShipDate;

    /**
     * @access public
     * @var RecordRef
     */
    public $chargeType;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"job" => "RecordRef",
    	"item" => "RecordRef",
    	"quantityAvailable" => "float",
    	"expandItemGroup" => "boolean",
    	"quantityOnHand" => "float",
    	"quantity" => "float",
    	"units" => "RecordRef",
    	"inventoryDetail" => "InventoryDetail",
    	"description" => "string",
    	"price" => "RecordRef",
    	"rate" => "string",
    	"serialNumbers" => "string",
    	"amount" => "float",
    	"isTaxable" => "boolean",
    	"commitInventory" => "SalesOrderItemCommitInventory",
    	"orderPriority" => "float",
    	"licenseCode" => "string",
    	"options" => "CustomFieldList",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"createPo" => "SalesOrderItemCreatePo",
    	"createdPo" => "RecordRef",
    	"altSalesAmt" => "float",
    	"createWo" => "boolean",
    	"poVendor" => "RecordRef",
    	"poCurrency" => "string",
    	"poRate" => "float",
    	"revRecSchedule" => "RecordRef",
    	"revRecStartDate" => "dateTime",
    	"revRecTermInMonths" => "integer",
    	"revRecEndDate" => "dateTime",
    	"deferRevRec" => "boolean",
    	"isClosed" => "boolean",
    	"catchUpPeriod" => "RecordRef",
    	"billingSchedule" => "RecordRef",
    	"fromJob" => "boolean",
    	"grossAmt" => "float",
    	"excludeFromRateRequest" => "boolean",
    	"isEstimate" => "boolean",
    	"line" => "integer",
    	"percentComplete" => "float",
    	"costEstimateType" => "ItemCostEstimateType",
    	"costEstimate" => "float",
    	"quantityBackOrdered" => "float",
    	"quantityBilled" => "float",
    	"quantityCommitted" => "float",
    	"quantityFulfilled" => "float",
    	"quantityPacked" => "float",
    	"quantityPicked" => "float",
    	"tax1Amt" => "float",
    	"taxCode" => "RecordRef",
    	"taxRate1" => "float",
    	"taxRate2" => "float",
    	"giftCertFrom" => "string",
    	"giftCertRecipientName" => "string",
    	"giftCertRecipientEmail" => "string",
    	"giftCertMessage" => "string",
    	"giftCertNumber" => "string",
    	"shipGroup" => "integer",
    	"itemIsFulfilled" => "boolean",
    	"shipAddress" => "RecordRef",
    	"shipMethod" => "RecordRef",
    	"vsoeSopGroup" => "VsoeSopGroup",
    	"vsoeIsEstimate" => "boolean",
    	"vsoePrice" => "float",
    	"vsoeAmount" => "float",
    	"vsoeAllocation" => "float",
    	"vsoeDeferral" => "VsoeDeferral",
    	"vsoePermitDiscount" => "VsoePermitDiscount",
    	"vsoeDelivered" => "boolean",
    	"expectedShipDate" => "dateTime",
    	"chargeType" => "RecordRef",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set quantityAvailable
     *
     * @param float $quantityAvailable
     * @return SalesOrderItem
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
     * Set expandItemGroup
     *
     * @param boolean $expandItemGroup
     * @return SalesOrderItem
     */
    public function setExpandItemGroup($expandItemGroup) {
        $this->expandItemGroup = $expandItemGroup;
        return $this;
    }

    /**
     * Get expandItemGroup
     *
     * @return boolean
     */
    public function getExpandItemGroup() {
        return $this->expandItemGroup;
    }


    /**
     * Set quantityOnHand
     *
     * @param float $quantityOnHand
     * @return SalesOrderItem
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
     * @return SalesOrderItem
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
     * @return SalesOrderItem
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
     * Set description
     *
     * @param string $description
     * @return SalesOrderItem
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
     * Set rate
     *
     * @param string $rate
     * @return SalesOrderItem
     */
    public function setRate($rate) {
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     *
     * @return string
     */
    public function getRate() {
        return $this->rate;
    }


    /**
     * Set serialNumbers
     *
     * @param string $serialNumbers
     * @return SalesOrderItem
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
     * Set amount
     *
     * @param float $amount
     * @return SalesOrderItem
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount() {
        return $this->amount;
    }


    /**
     * Set isTaxable
     *
     * @param boolean $isTaxable
     * @return SalesOrderItem
     */
    public function setIsTaxable($isTaxable) {
        $this->isTaxable = $isTaxable;
        return $this;
    }

    /**
     * Get isTaxable
     *
     * @return boolean
     */
    public function getIsTaxable() {
        return $this->isTaxable;
    }


    /**
     * Set commitInventory
     *
     * @param SalesOrderItemCommitInventory $commitInventory
     * @return SalesOrderItem
     */
    public function setCommitInventory(SalesOrderItemCommitInventory $commitInventory) {
        $this->commitInventory = $commitInventory;
        return $this;
    }

    /**
     * Get commitInventory
     *
     * @return SalesOrderItemCommitInventory
     */
    public function getCommitInventory() {
        return $this->commitInventory;
    }


    /**
     * Set orderPriority
     *
     * @param float $orderPriority
     * @return SalesOrderItem
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
     * Set licenseCode
     *
     * @param string $licenseCode
     * @return SalesOrderItem
     */
    public function setLicenseCode($licenseCode) {
        $this->licenseCode = $licenseCode;
        return $this;
    }

    /**
     * Get licenseCode
     *
     * @return string
     */
    public function getLicenseCode() {
        return $this->licenseCode;
    }


    /**
     * Set options
     *
     * @param CustomFieldList $options
     * @return SalesOrderItem
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
     * Set createPo
     *
     * @param SalesOrderItemCreatePo $createPo
     * @return SalesOrderItem
     */
    public function setCreatePo(SalesOrderItemCreatePo $createPo) {
        $this->createPo = $createPo;
        return $this;
    }

    /**
     * Get createPo
     *
     * @return SalesOrderItemCreatePo
     */
    public function getCreatePo() {
        return $this->createPo;
    }


    /**
     * Set altSalesAmt
     *
     * @param float $altSalesAmt
     * @return SalesOrderItem
     */
    public function setAltSalesAmt($altSalesAmt) {
        $this->altSalesAmt = $altSalesAmt;
        return $this;
    }

    /**
     * Get altSalesAmt
     *
     * @return float
     */
    public function getAltSalesAmt() {
        return $this->altSalesAmt;
    }


    /**
     * Set createWo
     *
     * @param boolean $createWo
     * @return SalesOrderItem
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
     * Set poCurrency
     *
     * @param string $poCurrency
     * @return SalesOrderItem
     */
    public function setPoCurrency($poCurrency) {
        $this->poCurrency = $poCurrency;
        return $this;
    }

    /**
     * Get poCurrency
     *
     * @return string
     */
    public function getPoCurrency() {
        return $this->poCurrency;
    }


    /**
     * Set poRate
     *
     * @param float $poRate
     * @return SalesOrderItem
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
     * Set revRecStartDate
     *
     * @param \DateTime $revRecStartDate
     * @return SalesOrderItem
     */
    public function setRevRecStartDate(\DateTime $revRecStartDate) {
        $this->revRecStartDate = $revRecStartDate->format('c');
        return $this;
    }

    /**
     * Get revRecStartDate
     *
     * @return \DateTime
     */
    public function getRevRecStartDate() {
        return new \DateTime($this->revRecStartDate);
    }


    /**
     * Set revRecTermInMonths
     *
     * @param integer $revRecTermInMonths
     * @return SalesOrderItem
     */
    public function setRevRecTermInMonths($revRecTermInMonths) {
        $this->revRecTermInMonths = $revRecTermInMonths;
        return $this;
    }

    /**
     * Get revRecTermInMonths
     *
     * @return integer
     */
    public function getRevRecTermInMonths() {
        return $this->revRecTermInMonths;
    }


    /**
     * Set revRecEndDate
     *
     * @param \DateTime $revRecEndDate
     * @return SalesOrderItem
     */
    public function setRevRecEndDate(\DateTime $revRecEndDate) {
        $this->revRecEndDate = $revRecEndDate->format('c');
        return $this;
    }

    /**
     * Get revRecEndDate
     *
     * @return \DateTime
     */
    public function getRevRecEndDate() {
        return new \DateTime($this->revRecEndDate);
    }


    /**
     * Set deferRevRec
     *
     * @param boolean $deferRevRec
     * @return SalesOrderItem
     */
    public function setDeferRevRec($deferRevRec) {
        $this->deferRevRec = $deferRevRec;
        return $this;
    }

    /**
     * Get deferRevRec
     *
     * @return boolean
     */
    public function getDeferRevRec() {
        return $this->deferRevRec;
    }


    /**
     * Set isClosed
     *
     * @param boolean $isClosed
     * @return SalesOrderItem
     */
    public function setIsClosed($isClosed) {
        $this->isClosed = $isClosed;
        return $this;
    }

    /**
     * Get isClosed
     *
     * @return boolean
     */
    public function getIsClosed() {
        return $this->isClosed;
    }


    /**
     * Set fromJob
     *
     * @param boolean $fromJob
     * @return SalesOrderItem
     */
    public function setFromJob($fromJob) {
        $this->fromJob = $fromJob;
        return $this;
    }

    /**
     * Get fromJob
     *
     * @return boolean
     */
    public function getFromJob() {
        return $this->fromJob;
    }


    /**
     * Set grossAmt
     *
     * @param float $grossAmt
     * @return SalesOrderItem
     */
    public function setGrossAmt($grossAmt) {
        $this->grossAmt = $grossAmt;
        return $this;
    }

    /**
     * Get grossAmt
     *
     * @return float
     */
    public function getGrossAmt() {
        return $this->grossAmt;
    }


    /**
     * Set excludeFromRateRequest
     *
     * @param boolean $excludeFromRateRequest
     * @return SalesOrderItem
     */
    public function setExcludeFromRateRequest($excludeFromRateRequest) {
        $this->excludeFromRateRequest = $excludeFromRateRequest;
        return $this;
    }

    /**
     * Get excludeFromRateRequest
     *
     * @return boolean
     */
    public function getExcludeFromRateRequest() {
        return $this->excludeFromRateRequest;
    }


    /**
     * Set isEstimate
     *
     * @param boolean $isEstimate
     * @return SalesOrderItem
     */
    public function setIsEstimate($isEstimate) {
        $this->isEstimate = $isEstimate;
        return $this;
    }

    /**
     * Get isEstimate
     *
     * @return boolean
     */
    public function getIsEstimate() {
        return $this->isEstimate;
    }


    /**
     * Set line
     *
     * @param integer $line
     * @return SalesOrderItem
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
     * Set percentComplete
     *
     * @param float $percentComplete
     * @return SalesOrderItem
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
     * Set costEstimateType
     *
     * @param ItemCostEstimateType $costEstimateType
     * @return SalesOrderItem
     */
    public function setCostEstimateType(ItemCostEstimateType $costEstimateType) {
        $this->costEstimateType = $costEstimateType;
        return $this;
    }

    /**
     * Get costEstimateType
     *
     * @return ItemCostEstimateType
     */
    public function getCostEstimateType() {
        return $this->costEstimateType;
    }


    /**
     * Set costEstimate
     *
     * @param float $costEstimate
     * @return SalesOrderItem
     */
    public function setCostEstimate($costEstimate) {
        $this->costEstimate = $costEstimate;
        return $this;
    }

    /**
     * Get costEstimate
     *
     * @return float
     */
    public function getCostEstimate() {
        return $this->costEstimate;
    }


    /**
     * Set quantityBackOrdered
     *
     * @param float $quantityBackOrdered
     * @return SalesOrderItem
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
     * Set quantityBilled
     *
     * @param float $quantityBilled
     * @return SalesOrderItem
     */
    public function setQuantityBilled($quantityBilled) {
        $this->quantityBilled = $quantityBilled;
        return $this;
    }

    /**
     * Get quantityBilled
     *
     * @return float
     */
    public function getQuantityBilled() {
        return $this->quantityBilled;
    }


    /**
     * Set quantityCommitted
     *
     * @param float $quantityCommitted
     * @return SalesOrderItem
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
     * Set quantityFulfilled
     *
     * @param float $quantityFulfilled
     * @return SalesOrderItem
     */
    public function setQuantityFulfilled($quantityFulfilled) {
        $this->quantityFulfilled = $quantityFulfilled;
        return $this;
    }

    /**
     * Get quantityFulfilled
     *
     * @return float
     */
    public function getQuantityFulfilled() {
        return $this->quantityFulfilled;
    }


    /**
     * Set quantityPacked
     *
     * @param float $quantityPacked
     * @return SalesOrderItem
     */
    public function setQuantityPacked($quantityPacked) {
        $this->quantityPacked = $quantityPacked;
        return $this;
    }

    /**
     * Get quantityPacked
     *
     * @return float
     */
    public function getQuantityPacked() {
        return $this->quantityPacked;
    }


    /**
     * Set quantityPicked
     *
     * @param float $quantityPicked
     * @return SalesOrderItem
     */
    public function setQuantityPicked($quantityPicked) {
        $this->quantityPicked = $quantityPicked;
        return $this;
    }

    /**
     * Get quantityPicked
     *
     * @return float
     */
    public function getQuantityPicked() {
        return $this->quantityPicked;
    }


    /**
     * Set tax1Amt
     *
     * @param float $tax1Amt
     * @return SalesOrderItem
     */
    public function setTax1Amt($tax1Amt) {
        $this->tax1Amt = $tax1Amt;
        return $this;
    }

    /**
     * Get tax1Amt
     *
     * @return float
     */
    public function getTax1Amt() {
        return $this->tax1Amt;
    }


    /**
     * Set taxRate1
     *
     * @param float $taxRate1
     * @return SalesOrderItem
     */
    public function setTaxRate1($taxRate1) {
        $this->taxRate1 = $taxRate1;
        return $this;
    }

    /**
     * Get taxRate1
     *
     * @return float
     */
    public function getTaxRate1() {
        return $this->taxRate1;
    }


    /**
     * Set taxRate2
     *
     * @param float $taxRate2
     * @return SalesOrderItem
     */
    public function setTaxRate2($taxRate2) {
        $this->taxRate2 = $taxRate2;
        return $this;
    }

    /**
     * Get taxRate2
     *
     * @return float
     */
    public function getTaxRate2() {
        return $this->taxRate2;
    }


    /**
     * Set giftCertFrom
     *
     * @param string $giftCertFrom
     * @return SalesOrderItem
     */
    public function setGiftCertFrom($giftCertFrom) {
        $this->giftCertFrom = $giftCertFrom;
        return $this;
    }

    /**
     * Get giftCertFrom
     *
     * @return string
     */
    public function getGiftCertFrom() {
        return $this->giftCertFrom;
    }


    /**
     * Set giftCertRecipientName
     *
     * @param string $giftCertRecipientName
     * @return SalesOrderItem
     */
    public function setGiftCertRecipientName($giftCertRecipientName) {
        $this->giftCertRecipientName = $giftCertRecipientName;
        return $this;
    }

    /**
     * Get giftCertRecipientName
     *
     * @return string
     */
    public function getGiftCertRecipientName() {
        return $this->giftCertRecipientName;
    }


    /**
     * Set giftCertRecipientEmail
     *
     * @param string $giftCertRecipientEmail
     * @return SalesOrderItem
     */
    public function setGiftCertRecipientEmail($giftCertRecipientEmail) {
        $this->giftCertRecipientEmail = $giftCertRecipientEmail;
        return $this;
    }

    /**
     * Get giftCertRecipientEmail
     *
     * @return string
     */
    public function getGiftCertRecipientEmail() {
        return $this->giftCertRecipientEmail;
    }


    /**
     * Set giftCertMessage
     *
     * @param string $giftCertMessage
     * @return SalesOrderItem
     */
    public function setGiftCertMessage($giftCertMessage) {
        $this->giftCertMessage = $giftCertMessage;
        return $this;
    }

    /**
     * Get giftCertMessage
     *
     * @return string
     */
    public function getGiftCertMessage() {
        return $this->giftCertMessage;
    }


    /**
     * Set giftCertNumber
     *
     * @param string $giftCertNumber
     * @return SalesOrderItem
     */
    public function setGiftCertNumber($giftCertNumber) {
        $this->giftCertNumber = $giftCertNumber;
        return $this;
    }

    /**
     * Get giftCertNumber
     *
     * @return string
     */
    public function getGiftCertNumber() {
        return $this->giftCertNumber;
    }


    /**
     * Set shipGroup
     *
     * @param integer $shipGroup
     * @return SalesOrderItem
     */
    public function setShipGroup($shipGroup) {
        $this->shipGroup = $shipGroup;
        return $this;
    }

    /**
     * Get shipGroup
     *
     * @return integer
     */
    public function getShipGroup() {
        return $this->shipGroup;
    }


    /**
     * Set itemIsFulfilled
     *
     * @param boolean $itemIsFulfilled
     * @return SalesOrderItem
     */
    public function setItemIsFulfilled($itemIsFulfilled) {
        $this->itemIsFulfilled = $itemIsFulfilled;
        return $this;
    }

    /**
     * Get itemIsFulfilled
     *
     * @return boolean
     */
    public function getItemIsFulfilled() {
        return $this->itemIsFulfilled;
    }


    /**
     * Set vsoeSopGroup
     *
     * @param VsoeSopGroup $vsoeSopGroup
     * @return SalesOrderItem
     */
    public function setVsoeSopGroup(VsoeSopGroup $vsoeSopGroup) {
        $this->vsoeSopGroup = $vsoeSopGroup;
        return $this;
    }

    /**
     * Get vsoeSopGroup
     *
     * @return VsoeSopGroup
     */
    public function getVsoeSopGroup() {
        return $this->vsoeSopGroup;
    }


    /**
     * Set vsoeIsEstimate
     *
     * @param boolean $vsoeIsEstimate
     * @return SalesOrderItem
     */
    public function setVsoeIsEstimate($vsoeIsEstimate) {
        $this->vsoeIsEstimate = $vsoeIsEstimate;
        return $this;
    }

    /**
     * Get vsoeIsEstimate
     *
     * @return boolean
     */
    public function getVsoeIsEstimate() {
        return $this->vsoeIsEstimate;
    }


    /**
     * Set vsoePrice
     *
     * @param float $vsoePrice
     * @return SalesOrderItem
     */
    public function setVsoePrice($vsoePrice) {
        $this->vsoePrice = $vsoePrice;
        return $this;
    }

    /**
     * Get vsoePrice
     *
     * @return float
     */
    public function getVsoePrice() {
        return $this->vsoePrice;
    }


    /**
     * Set vsoeAmount
     *
     * @param float $vsoeAmount
     * @return SalesOrderItem
     */
    public function setVsoeAmount($vsoeAmount) {
        $this->vsoeAmount = $vsoeAmount;
        return $this;
    }

    /**
     * Get vsoeAmount
     *
     * @return float
     */
    public function getVsoeAmount() {
        return $this->vsoeAmount;
    }


    /**
     * Set vsoeAllocation
     *
     * @param float $vsoeAllocation
     * @return SalesOrderItem
     */
    public function setVsoeAllocation($vsoeAllocation) {
        $this->vsoeAllocation = $vsoeAllocation;
        return $this;
    }

    /**
     * Get vsoeAllocation
     *
     * @return float
     */
    public function getVsoeAllocation() {
        return $this->vsoeAllocation;
    }


    /**
     * Set vsoeDeferral
     *
     * @param VsoeDeferral $vsoeDeferral
     * @return SalesOrderItem
     */
    public function setVsoeDeferral(VsoeDeferral $vsoeDeferral) {
        $this->vsoeDeferral = $vsoeDeferral;
        return $this;
    }

    /**
     * Get vsoeDeferral
     *
     * @return VsoeDeferral
     */
    public function getVsoeDeferral() {
        return $this->vsoeDeferral;
    }


    /**
     * Set vsoePermitDiscount
     *
     * @param VsoePermitDiscount $vsoePermitDiscount
     * @return SalesOrderItem
     */
    public function setVsoePermitDiscount(VsoePermitDiscount $vsoePermitDiscount) {
        $this->vsoePermitDiscount = $vsoePermitDiscount;
        return $this;
    }

    /**
     * Get vsoePermitDiscount
     *
     * @return VsoePermitDiscount
     */
    public function getVsoePermitDiscount() {
        return $this->vsoePermitDiscount;
    }


    /**
     * Set vsoeDelivered
     *
     * @param boolean $vsoeDelivered
     * @return SalesOrderItem
     */
    public function setVsoeDelivered($vsoeDelivered) {
        $this->vsoeDelivered = $vsoeDelivered;
        return $this;
    }

    /**
     * Get vsoeDelivered
     *
     * @return boolean
     */
    public function getVsoeDelivered() {
        return $this->vsoeDelivered;
    }


    /**
     * Set expectedShipDate
     *
     * @param \DateTime $expectedShipDate
     * @return SalesOrderItem
     */
    public function setExpectedShipDate(\DateTime $expectedShipDate) {
        $this->expectedShipDate = $expectedShipDate->format('c');
        return $this;
    }

    /**
     * Get expectedShipDate
     *
     * @return \DateTime
     */
    public function getExpectedShipDate() {
        return new \DateTime($this->expectedShipDate);
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return SalesOrderItem
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