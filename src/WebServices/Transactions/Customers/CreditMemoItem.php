<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Transactions\Customers;

use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\ItemCostEstimateType;
use Nzolt\NetSuite\WebServices\Platform\Common\InventoryDetail;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeSopGroup;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoeDeferral;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\VsoePermitDiscount;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;

/**
 * CreditMemoItem
 */
class CreditMemoItem {

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
    protected $orderLine;

    /**
     * @access public
     * @var integer
     */
    protected $line;

    /**
     * @access public
     * @var float
     */
    protected $quantity;

    /**
     * @access public
     * @var string
     */
    protected $description;

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
     * @var float
     */
    protected $tax1Amt;

    /**
     * @access public
     * @var float
     */
    protected $grossAmt;

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
     * @var boolean
     */
    protected $deferRevRec;

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
    public $catchUpPeriod;

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
    	"orderLine" => "integer",
    	"line" => "integer",
    	"quantity" => "float",
    	"description" => "string",
    	"binNumbers" => "string",
    	"price" => "RecordRef",
    	"rate" => "string",
    	"amount" => "float",
    	"isTaxable" => "boolean",
    	"options" => "CustomFieldList",
    	"taxCode" => "RecordRef",
    	"taxRate1" => "float",
    	"taxRate2" => "float",
    	"tax1Amt" => "float",
    	"grossAmt" => "float",
    	"department" => "RecordRef",
    	"class" => "RecordRef",
    	"location" => "RecordRef",
    	"costEstimateType" => "ItemCostEstimateType",
    	"costEstimate" => "float",
    	"revRecSchedule" => "RecordRef",
    	"revRecStartDate" => "dateTime",
    	"revRecTermInMonths" => "integer",
    	"revRecEndDate" => "dateTime",
    	"units" => "RecordRef",
    	"inventoryDetail" => "InventoryDetail",
    	"serialNumbers" => "string",
    	"deferRevRec" => "boolean",
    	"giftCertFrom" => "string",
    	"giftCertRecipientName" => "string",
    	"giftCertRecipientEmail" => "string",
    	"giftCertMessage" => "string",
    	"giftCertNumber" => "string",
    	"vsoeSopGroup" => "VsoeSopGroup",
    	"vsoeIsEstimate" => "boolean",
    	"vsoePrice" => "float",
    	"vsoeAmount" => "float",
    	"vsoeAllocation" => "float",
    	"vsoeDeferral" => "VsoeDeferral",
    	"vsoePermitDiscount" => "VsoePermitDiscount",
    	"vsoeDelivered" => "boolean",
    	"catchUpPeriod" => "RecordRef",
    	"chargeType" => "RecordRef",
    	"chargesList" => "RecordRefList",
    	"customFieldList" => "CustomFieldList",
    );

    /**
     * Set orderLine
     *
     * @param integer $orderLine
     * @return CreditMemoItem
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
     * Set line
     *
     * @param integer $line
     * @return CreditMemoItem
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
     * Set quantity
     *
     * @param float $quantity
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * Set binNumbers
     *
     * @param string $binNumbers
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * Set taxRate1
     *
     * @param float $taxRate1
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * Set tax1Amt
     *
     * @param float $tax1Amt
     * @return CreditMemoItem
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
     * Set grossAmt
     *
     * @param float $grossAmt
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * Set revRecStartDate
     *
     * @param \DateTime $revRecStartDate
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * Set inventoryDetail
     *
     * @param InventoryDetail $inventoryDetail
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * Set deferRevRec
     *
     * @param boolean $deferRevRec
     * @return CreditMemoItem
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
     * Set giftCertFrom
     *
     * @param string $giftCertFrom
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * Set vsoeSopGroup
     *
     * @param VsoeSopGroup $vsoeSopGroup
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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
     * @return CreditMemoItem
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