<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\ItemCostEstimateType;

/**
 * EstimateItem
 */
class EstimateItem {

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
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var boolean
     */
    protected $expandItemGroup;

    /**
     * @access public
     * @var float
     */
    protected $quantityAvailable;

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
     * @var string
     */
    protected $description;

    /**
     * @access public
     * @var string
     */
    protected $serialNumbers;

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
     * @var float
     */
    protected $amount;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $options;

    /**
     * @access public
     * @var integer
     */
    protected $revRecTermInMonths;

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
     * @var boolean
     */
    protected $isTaxable;

    /**
     * @access public
     * @var float
     */
    protected $altSalesAmt;

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
    protected $isEstimate;

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
     * @var boolean
     */
    protected $excludeFromRateRequest;

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
    	"line" => "integer",
    	"expandItemGroup" => "boolean",
    	"quantityAvailable" => "float",
    	"quantityOnHand" => "float",
    	"quantity" => "float",
    	"units" => "RecordRef",
    	"description" => "string",
    	"serialNumbers" => "string",
    	"price" => "RecordRef",
    	"rate" => "string",
    	"amount" => "float",
    	"options" => "CustomFieldList",
    	"revRecTermInMonths" => "integer",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"isTaxable" => "boolean",
    	"altSalesAmt" => "float",
    	"fromJob" => "boolean",
    	"grossAmt" => "float",
    	"isEstimate" => "boolean",
    	"tax1Amt" => "float",
    	"taxCode" => "RecordRef",
    	"costEstimateType" => "ItemCostEstimateType",
    	"costEstimate" => "float",
    	"excludeFromRateRequest" => "boolean",
    	"taxRate1" => "float",
    	"taxRate2" => "float",
    	"shipGroup" => "integer",
    	"itemIsFulfilled" => "boolean",
    	"shipAddress" => "RecordRef",
    	"shipMethod" => "RecordRef",
    	"expectedShipDate" => "dateTime",
    	"chargeType" => "RecordRef",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set line
     *
     * @param integer $line
     * @return EstimateItem
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
     * Set expandItemGroup
     *
     * @param boolean $expandItemGroup
     * @return EstimateItem
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
     * Set quantityAvailable
     *
     * @param float $quantityAvailable
     * @return EstimateItem
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
     * Set quantityOnHand
     *
     * @param float $quantityOnHand
     * @return EstimateItem
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
     * @return EstimateItem
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
     * Set description
     *
     * @param string $description
     * @return EstimateItem
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
     * Set serialNumbers
     *
     * @param string $serialNumbers
     * @return EstimateItem
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
     * Set rate
     *
     * @param string $rate
     * @return EstimateItem
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
     * Set amount
     *
     * @param float $amount
     * @return EstimateItem
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
     * Set options
     *
     * @param CustomFieldList $options
     * @return EstimateItem
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
     * Set revRecTermInMonths
     *
     * @param integer $revRecTermInMonths
     * @return EstimateItem
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
     * Set isTaxable
     *
     * @param boolean $isTaxable
     * @return EstimateItem
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
     * Set altSalesAmt
     *
     * @param float $altSalesAmt
     * @return EstimateItem
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
     * Set fromJob
     *
     * @param boolean $fromJob
     * @return EstimateItem
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
     * @return EstimateItem
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
     * Set isEstimate
     *
     * @param boolean $isEstimate
     * @return EstimateItem
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
     * Set tax1Amt
     *
     * @param float $tax1Amt
     * @return EstimateItem
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
     * Set costEstimateType
     *
     * @param ItemCostEstimateType $costEstimateType
     * @return EstimateItem
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
     * @return EstimateItem
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
     * Set excludeFromRateRequest
     *
     * @param boolean $excludeFromRateRequest
     * @return EstimateItem
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
     * Set taxRate1
     *
     * @param float $taxRate1
     * @return EstimateItem
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
     * @return EstimateItem
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
     * Set shipGroup
     *
     * @param integer $shipGroup
     * @return EstimateItem
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
     * @return EstimateItem
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
     * Set expectedShipDate
     *
     * @param \DateTime $expectedShipDate
     * @return EstimateItem
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
     * @return EstimateItem
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