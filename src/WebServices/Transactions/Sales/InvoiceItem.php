<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Sales;

use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;
use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\ItemCostEstimateType;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeSopGroup;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeDeferral;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoePermitDiscount;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;

/**
 * InvoiceItem
 */
class InvoiceItem {

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
     * @var string
     */
    protected $description;

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
     * @var CustomFieldList
     */
    protected $options;

    /**
     * @access public
     * @var boolean
     */
    protected $deferRevRec;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var float
     */
    protected $currentPercent;

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
     * @var string
     */
    protected $binNumbers;

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
    protected $percentComplete;

    /**
     * @access public
     * @var float
     */
    protected $quantityOnHand;

    /**
     * @access public
     * @var float
     */
    protected $quantityAvailable;

    /**
     * @access public
     * @var float
     */
    protected $quantityOrdered;

    /**
     * @access public
     * @var float
     */
    protected $quantityRemaining;

    /**
     * @access public
     * @var float
     */
    protected $quantityFulfilled;

    /**
     * @access public
     * @var float
     */
    protected $amountOrdered;

    /**
     * @access public
     * @var RecordRef
     */
    public $department;

    /**
     * @access public
     * @var integer
     */
    protected $orderLine;

    /**
     * @access public
     * @var string
     */
    protected $licenseCode;

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
    public $revRecSchedule;

    /**
     * @access public
     * @var dateTime
     */
    protected $revRecStartDate;

    /**
     * @access public
     * @var dateTime
     */
    protected $revRecEndDate;

    /**
     * @access public
     * @var float
     */
    protected $grossAmt;

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
     * @var RecordRef
     */
    public $catchUpPeriod;

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
     * @var RecordRef
     */
    public $chargeType;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $chargesList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    static $paramtypesmap = array(
    	"job" => "RecordRef",
    	"item" => "RecordRef",
    	"line" => "integer",
    	"description" => "string",
    	"amount" => "float",
    	"isTaxable" => "boolean",
    	"options" => "CustomFieldList",
    	"deferRevRec" => "boolean",
    	"quantity" => "float",
    	"currentPercent" => "float",
    	"units" => "RecordRef",
    	"inventoryDetail" => "InventoryDetail",
    	"serialNumbers" => "string",
    	"binNumbers" => "string",
    	"price" => "RecordRef",
    	"rate" => "string",
    	"percentComplete" => "float",
    	"quantityOnHand" => "float",
    	"quantityAvailable" => "float",
    	"quantityOrdered" => "float",
    	"quantityRemaining" => "float",
    	"quantityFulfilled" => "float",
    	"amountOrdered" => "float",
    	"department" => "RecordRef",
    	"orderLine" => "integer",
    	"licenseCode" => "string",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"revRecSchedule" => "RecordRef",
    	"revRecStartDate" => "dateTime",
    	"revRecEndDate" => "dateTime",
    	"grossAmt" => "float",
    	"costEstimateType" => "ItemCostEstimateType",
    	"costEstimate" => "float",
    	"excludeFromRateRequest" => "boolean",
    	"catchUpPeriod" => "RecordRef",
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
    	"chargeType" => "RecordRef",
    	"chargesList" => "RecordRefList",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set line
     *
     * @param integer $line
     * @return InvoiceItem
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
     * Set description
     *
     * @param string $description
     * @return InvoiceItem
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
     * Set amount
     *
     * @param float $amount
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * Set options
     *
     * @param CustomFieldList $options
     * @return InvoiceItem
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
     * Set deferRevRec
     *
     * @param boolean $deferRevRec
     * @return InvoiceItem
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
     * Set quantity
     *
     * @param float $quantity
     * @return InvoiceItem
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
     * Set currentPercent
     *
     * @param float $currentPercent
     * @return InvoiceItem
     */
    public function setCurrentPercent($currentPercent) {
        $this->currentPercent = $currentPercent;
        return $this;
    }

    /**
     * Get currentPercent
     *
     * @return float
     */
    public function getCurrentPercent() {
        return $this->currentPercent;
    }


    /**
     * Set inventoryDetail
     *
     * @param InventoryDetail $inventoryDetail
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * Set binNumbers
     *
     * @param string $binNumbers
     * @return InvoiceItem
     */
    public function setBinNumbers($binNumbers) {
        $this->binNumbers = $binNumbers;
        return $this;
    }

    /**
     * Get binNumbers
     *
     * @return string
     */
    public function getBinNumbers() {
        return $this->binNumbers;
    }


    /**
     * Set rate
     *
     * @param string $rate
     * @return InvoiceItem
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
     * Set percentComplete
     *
     * @param float $percentComplete
     * @return InvoiceItem
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
     * Set quantityOnHand
     *
     * @param float $quantityOnHand
     * @return InvoiceItem
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
     * Set quantityAvailable
     *
     * @param float $quantityAvailable
     * @return InvoiceItem
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
     * Set quantityOrdered
     *
     * @param float $quantityOrdered
     * @return InvoiceItem
     */
    public function setQuantityOrdered($quantityOrdered) {
        $this->quantityOrdered = $quantityOrdered;
        return $this;
    }

    /**
     * Get quantityOrdered
     *
     * @return float
     */
    public function getQuantityOrdered() {
        return $this->quantityOrdered;
    }


    /**
     * Set quantityRemaining
     *
     * @param float $quantityRemaining
     * @return InvoiceItem
     */
    public function setQuantityRemaining($quantityRemaining) {
        $this->quantityRemaining = $quantityRemaining;
        return $this;
    }

    /**
     * Get quantityRemaining
     *
     * @return float
     */
    public function getQuantityRemaining() {
        return $this->quantityRemaining;
    }


    /**
     * Set quantityFulfilled
     *
     * @param float $quantityFulfilled
     * @return InvoiceItem
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
     * Set amountOrdered
     *
     * @param float $amountOrdered
     * @return InvoiceItem
     */
    public function setAmountOrdered($amountOrdered) {
        $this->amountOrdered = $amountOrdered;
        return $this;
    }

    /**
     * Get amountOrdered
     *
     * @return float
     */
    public function getAmountOrdered() {
        return $this->amountOrdered;
    }


    /**
     * Set orderLine
     *
     * @param integer $orderLine
     * @return InvoiceItem
     */
    public function setOrderLine($orderLine) {
        $this->orderLine = $orderLine;
        return $this;
    }

    /**
     * Get orderLine
     *
     * @return integer
     */
    public function getOrderLine() {
        return $this->orderLine;
    }


    /**
     * Set licenseCode
     *
     * @param string $licenseCode
     * @return InvoiceItem
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
     * Set revRecStartDate
     *
     * @param \DateTime $revRecStartDate
     * @return InvoiceItem
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
     * Set revRecEndDate
     *
     * @param \DateTime $revRecEndDate
     * @return InvoiceItem
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
     * Set grossAmt
     *
     * @param float $grossAmt
     * @return InvoiceItem
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
     * Set costEstimateType
     *
     * @param ItemCostEstimateType $costEstimateType
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * Set tax1Amt
     *
     * @param float $tax1Amt
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * @return InvoiceItem
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
     * Set chargesList
     *
     * @param RecordRefList $chargesList
     * @return InvoiceItem
     */
    public function setChargesList(RecordRefList $chargesList) {
        $this->chargesList = $chargesList;
        return $this;
    }

    /**
     * Get chargesList
     *
     * @return RecordRefList
     */
    public function getChargesList() {
        return $this->chargesList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return InvoiceItem
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